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
		$this->load->model('mescuela');
  	}
	public function index(){
		$usuario = $this->usuario;
		$contadorAll = $this->msuperadmin->countAll();
		$name = $this->musuario->getName($usuario->id_usuario);

		$data = array("title"=>"Super Admin Dashboard");
		$data["name"] = $name["nombre"]." ".$name["appat"];
		$data["contador"] = $contadorAll;

		$this->load->view("headers/vheadersadmin",$data);
		$this->load->view('vdashboardsa');
        $this->load->view('footers/vfooter');
	}
	public function escuelas_index(){
		$usuario = $this->usuario;
		$name = $this->musuario->getName($usuario->id_usuario);
		$escuelas = $this->mescuela->getEscuelas();

		$data = array("title"=>"Super Admin Dashboard");
		$data["name"] = $name["nombre"]." ".$name["appat"];
		$data["escuelas"] = $escuelas;

		$this->load->view("headers/vheadersadmin",$data);
		$this->load->view('vdashboardescuela');
        $this->load->view('footers/vfooter');
	}
	public function escuelas_crear(){
		$usuario = $this->usuario;
		$name = $this->musuario->getName($usuario->id_usuario);
		$name = $this->musuario->getName($usuario->id_usuario);
		$escuelas = $this->mescuela->getEscuelas();

		$data = array("title"=>"Super Admin Dashboard");
		$data["name"] = $name["nombre"]." ".$name["appat"];

		$this->load->view("headers/vheadersadmin",$data);
		$this->load->view('vformescuela');
        $this->load->view('footers/vfooter');
	}
	public function usuarios(){
		$usuario = $this->usuario;
		$name = $this->musuario->getName($usuario->id_usuario);
		$usuarios = $this->msuperadmin->getUsuarios();

		$data = array("title"=>"Super Admin Dashboard");
		$data["name"] = $name["nombre"]." ".$name["appat"];
		$data["usuarios"] = $usuarios;

		$this->load->view("headers/vheadersadmin",$data);
		$this->load->view('vdashboardusuario');
        $this->load->view('footers/vfooter');
	}
}
