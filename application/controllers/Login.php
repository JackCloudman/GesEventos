<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  	function __construct()
  	{
  		parent::__construct();
  		$this->load->model('mlogin');
  	}
	public function index()
	{
		$user = $this->session->userdata("user");
		if(!$user){
			$this->load->view('vlogin');
		}
		else{
			redirect('dashboard');
		}
		return;

	}
	public function iniciar(){
		if(!$this->input->post()){
			echo "Hicite algo mal!";
			return;
		}
		$data = $this->input->post();
		if(isset($data['username'])&&isset($data['password'])){
			$username = $data['username'];
			$password = $data['password'];
			$data = $this->mlogin->ingresar($username,$password);
			if(!$data){
				echo "Usuario o contraseña incorrectos";
				return;
			}
			$name = $data["nombre"]." ".$data["appat"]." ".$data["apmat"];
			$this->session->set_userdata('user',(object)Array(
				"id_usuario"	=> $data['id_usuario'],
				"nombre" 		=> $data["nombre"],
				"appat"  		=> $data["appat"],
				"apmat"			=> $data["apmat"],
				"nivel"  		=> $data["nivel_permiso"]
				));
			echo "Bienvenido ".$name;
			return;
		}
		else{
			echo "No derrapes!";
			return;
		}
	}
	/*public function generarpass($pass=null){
		if(!$pass){
			echo "Mandame un parametro!";
			return;
		}
		echo password_hash($pass, PASSWORD_DEFAULT)."\n";
	}*/
	public function salir(){
		$this->session->unset_userdata('user');
		redirect(base_url());
	}
	public function recovery(){
		$this->load->view('vrecovery');
	}
}
