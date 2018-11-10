<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
  	function __construct()
  	{
  		parent::__construct();
 		$user = $this->session->userdata("user");
		if($user){
			redirect('dashboard');	
		}
		$this->load->model('musuario');
  	}
	public function index(){
		if(!$this->input->post()){
			return;
		}
		$data = $this->input->post();
		if(isset($data['username'])&&isset($data['password'])&&isset($data['confirm-password'])&&isset($data['email'])&&isset($data['nombre'])&&isset($data['appat'])&&isset($data['apmat'])&&isset($data['ocupacion'])&&isset($data['edad'])&&isset($data['sexo'])){
			$nombre = $data['nombre'];
			$appat = $data['appat'];
			$apmat = $data['apmat'];
			$username = $data['username'];
			$password = $data['password'];
			$email = $data['email'];
			$ocupacion = $data['ocupacion'];
			$edad = $data['edad'];
			$sexo = $data['sexo'];

			$exist = $this->musuario->exist($username,$email);
			if($exist){
				echo "El usuario o el email ya existe!";
				return;
			}
			$result = $this->musuario->register($nombre,$appat,$apmat,$username,$email,$password,$ocupacion,$edad,$sexo);
			if($result){
				echo "Registro exitoso!";
				return;
			}
		}else{
			echo "No derrapes xd";
			print_r($data);
		}
		return;

	}
}
