<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {
  	function __construct()
  	{
  		parent::__construct();
 		$usuario = $this->session->userdata("user");
		if(!$usuario){
			redirect('dashboard');	
		}
		if($usuario->nivel<3){
			echo $usuario->nivel;
			return;
			redirect('dashboard');	
		}
		$this->load->model('msuperadmin');
  	}
	public function index(){
		/*
		Prueba de la base de datos para insertar escuelas, usuario y administrador
		$escuela = Array(
                  "nombre"  => "Escuela Superior de Computo",
                  "dir1"    => "Calle 1",
                  "dir2"    => "Calle 2",
                  );
		$admin = Array(
                    "nombre"        => "jack",
                    "correo"        => "jack@jack.com",
                    "password"      => "1234",
                    );
		$result = $this->msuperadmin->crearEscuela($escuela,$admin);
		echo "Tienes permiso xd, resultado: ";
		print_r($result);*/
	}
}
