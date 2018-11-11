<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {
  	function __construct()
  	{
  		parent::__construct();
 		$this->usuario = $this->session->userdata("user");
		if(!$this->usuario){
			redirect('dashboard');	
		}
		if($this->usuario->nivel<3){
			redirect('dashboard');	
		}
		$this->load->model('msuperadmin');
		$this->load->model('musuario');
  	}
	public function index(){
		$usuario = $this->usuario;
		$name = $this->musuario->getName($usuario->id_usuario);

		$data = array("title"=>"Super Admin Dashboard");
		$data["name"] = $name["nombre"]." ".$name["appat"];

		$this->load->view("headers/vheadersadmin",$data);
		$this->load->view('vdashboardsa');
        $this->load->view('footers/vfooter');
	}
}
