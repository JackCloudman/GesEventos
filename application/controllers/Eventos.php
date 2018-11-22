<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {
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
        $this->load->library('form_validation');
    }
    public function index()
    {
      echo "Evento index";
    }
    public function ajax_inscribir()
    {
        $respuesta = Array();
        $data = $this->input->post();
        $usuario = $this->usuario;
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
              $result = $this->mevento->inscribir($usuario->id_usuario,$data["id_evento"]);
              if($result){
                $respuesta["codigo"] = 0;
                $respuesta["respuesta"] = "Inscripcion correcta";
                $respuesta["errores"] = Array();
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
        header('Content-Type: application/json');
   	    echo json_encode($respuesta);
    }
}
}
