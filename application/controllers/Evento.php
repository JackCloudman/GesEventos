<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $usuario = $this->session->userdata("user");
        if(!$usuario){
            redirect('login');
        }
        if($usuario->nivel==3)
            redirect('Superadmin');
        if($usuario->nivel==2)
            redirect('Admin');
        $this->usuario = $this->session->userdata("user");
        $this->load->model('mevento');
        $this->load->model('mboleto');
        $this->load->model('mcomentario');
        $this->load->library('form_validation');
        $this->load->model('musuario');
        #Configuracion del Email
        $this->load->library('email');
        $this->load->config('mail');
        $email_settings = $this->config->item('email');
        $this->email->initialize($email_settings);
        #Configuracion Mpdf
        require_once(APPPATH . '../vendor/autoload.php');
        $this->mpdf = new \Mpdf\Mpdf([
          'margin_left' => 20,
          'margin_right' => 15,
          'margin_top' => 25,
          'margin_bottom' => 25,
          'margin_header' => 10,
          'margin_footer' => 10,
          'showBarcodeNumbers' => FALSE
        ]);
    }
    public function index($idEvento=null)
    {
      if(!$idEvento)
          redirect('Dashboard');;//Debe mandar la id!
      $evento= $this->mevento->getEvento($idEvento);
      if(!$evento){
          redirect('Dashboard');
      }
      $temp = Array(
        "usuario" =>  $this->usuario->id_usuario,
        "evento"  => $idEvento
      );

      $data = array("title"=>"EVENTOS");
      $data["evento"] = $evento;
      $data['boleto'] = $this->mboleto->getBoleto($temp["usuario"],$temp["evento"]);
      $data['comentario'] = $this->mcomentario->verificarUsuario($temp);
      $data["boletos_restantes"] = $this->mevento->isdisponible($idEvento);

      $this->load->view('headers/vheader',array("title"=>"Informacion evento"));
      $this->load->view('vverevento',$data);
      $this->load->view('footers/vfooter');
    }
    public function ajax_inscribir()
    {
        $respuesta = Array();
        $data = $this->input->post();
        $usuario = $this->usuario;
        header('Content-Type: application/json');
        if(!$data){
          $respuesta["codigo"] = 1;
          $respuesta["respuesta"] = "No hay informacion del evento";
          $respuesta["errores"] = Array("No se encuentra el evento!");
        }else{
          $this->form_validation->set_rules('id_evento', 'Evento', 'required');
          $this->form_validation->set_data($this->input->post());

          $validate = $this->form_validation->run();
          if(!$validate){
            $respuesta["codigo"] = 1;
            $respuesta["respuesta"] = "No hay informacion del evento";
            $respuesta["errores"] = Array("No se encuentra el evento!");
          }else{
            if(!$this->mevento->getEvento($data["id_evento"])){
              $respuesta["codigo"] = 1;
              $respuesta["respuesta"] = "Este evento no existe o ya no esta disponible";
              $respuesta["errores"] = Array("Este evento no esta disponible!");
            }else{
            if(!$this->mboleto->getBoleto($usuario->id_usuario,$data["id_evento"])){
              if(!$this->mevento->isdisponible($data["id_evento"])){
                $respuesta["codigo"] = -1;
                $respuesta["respuesta"] = "Ya no hay boletos disponibles :(";
                $respuesta["errores"] = Array("<p>Ya no hay boletos disponibles! :(</p>");
                echo json_encode($respuesta);
                return;
              }
              $result = $this->mevento->inscribir($usuario->id_usuario,$data["id_evento"]);
              if($result){
                $this->enviarBoleto($data["id_evento"]);
                $respuesta["codigo"] = 0;
                $respuesta["respuesta"] = "Inscripcion correcta";
              }
              else{
                $respuesta["codigo"] = 1;
                $respuesta["respuesta"] = "No se puede inscribir al evento! :(";
                $respuesta["errores"] = Array("Error al inscribirse al evento, intenta mas tarde!");
              }
            }else{
              $respuesta["codigo"] = 1;
              $respuesta["respuesta"] = "Ya estas inscrito a este evento!";
              $respuesta["errores"] = Array("<p>Ya estas inscrito a este evento!</p>");
            }
          }
        }
   	    echo json_encode($respuesta);
    }
  }
  private function enviarBoleto($id_evento){
    $boleto = $this->mboleto->getBoleto($this->usuario->id_usuario,$id_evento);
    if(!$boleto)
      return false;
    $boleto = $this->mboleto->getAllinfo($boleto->id_boleto);
    $html=$this->load->view('Guest/vboleto',Array("boleto"=>$boleto),true);
    $mpdf = $this->mpdf;
    $mpdf->WriteHTML($html);
    $content = $mpdf->Output('', 'S');
    $this->email->attach($content, 'attachment',$boleto->qr, 'application/pdf');
    $this->email->from("no-reply@juanjoserv.com");
    $this->email->subject("Aqui esta el tu boleto!");
    $this->email->message("Adjuntamos el boleto para asistir al evento: ".$boleto->nombre_evento);
    $this->email->to($boleto->correo);
    $result = $this->email->send();
    if($result){
      return true;
    }
    else{
      return false;
    }

  }
  public function buscar($busqueda){
    $usuario = $this->usuario;

    $datos['title'] = "Dashboard";
    $datos['head'] = $this->musuario->getName($usuario->id_usuario);
    $datos['eventos'] = $this->mevento->search(urldecode($busqueda));

    $this->load->view('headers/vheaderuser',$datos);
    $this->load->view('Guest/vdashboard');
    $this->load->view('footers/vfooter');
  }
}
