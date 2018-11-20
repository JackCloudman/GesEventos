<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  	function __construct()
  	{
  		parent::__construct();
 		$this->usuario = $this->session->userdata("user");
		if(!$this->usuario){
			redirect('dashboard');
		}
		if($this->usuario->nivel!=2){
			redirect('dashboard');
		}
		$this->load->model('musuario');
		$this->load->model('mescuela');
		$this->load->model('mevento');
		$this->load->library('form_validation');
  	}
	public function index(){
		$usuario = $this->usuario;
		$escuela = $this->mescuela->getEscuelaByAdmin($usuario->id_usuario);
		if(!$escuela)
			return;

		$eventos = $this->mevento->getEventosByEscuela($escuela->id_escuela);
		$name = $this->musuario->getName($usuario->id_usuario);
		$data = array("title"=>"Admin Dashboard");
		$data["name"] = $name["nombre"]." ".$name["appat"];

		$this->load->view("headers/vheaderadmin",$data);
		$this->load->view('vdashboardadmin');
        $this->load->view('footers/vfooter');
	}
	public function eventos_index(){
		$usuario = $this->usuario;
		$name = $this->musuario->getName($usuario->id_usuario);
		$escuela = $this->mescuela->getEscuelaByAdmin($usuario->id_usuario);
		$eventos = $this->mevento->getEventosByEscuela($escuela->id_escuela);

		$data = array("title"=>"Admin Dashboard");
		$data["name"] = $name["nombre"]." ".$name["appat"];
		$data["eventos"] = $eventos;

		$this->load->view("headers/vheaderadmin",$data);
		$this->load->view('Admin/vlistaeventos');
		return;
	}
	public function ajax_delete_evento(){
		$respuesta = Array();
    $usuario = $this->usuario;
		if(!$this->input->post()){
			$respuesta["codigo"] = 1;
			$respuesta["respuesta"] = "Sin parametros";
		}else{
			$this->form_validation->set_rules('evento', 'Evento', 'required');
			$this->form_validation->set_data($this->input->post());
			if(!$this->form_validation->run()){
				$respuesta["codigo"] = 2;
				$respuesta["respuesta"] = "Falta el id del evento";
				$respuesta["errores"] = validation_errors();
			}else{
				$id_evento = $this->input->post()["evento"];
        $escuela = $this->mescuela->getEscuelaByAdmin($usuario->id_usuario);
        $evento = $this->mevento->getEvento($id_evento);
        if($evento->id_evento !=$id_evento){
          $respuesta["codigo"] = 1;
          $respuesta["respuesta"] = "No se pudo borrar el evento";
          $respuesta["errores"] = Array("No se pudo borrar el evento");
        }else{
  				if($this->mevento->deleteEvento($id_evento)){
  					$respuesta["codigo"] = 0;
  					$respuesta["respuesta"] = "Evento borrado con exito";
  					$respuesta["errores"] = Array();
  				}else{
  					$respuesta["codigo"] = 1;
  					$respuesta["respuesta"] = "No se pudo borrar el evento";
  					$respuesta["errores"] = Array("No se pudo borrar el evento");
  				}
        }
			}
		}
   	  header('Content-Type: application/json');
 	  echo json_encode($respuesta);

	}
}
