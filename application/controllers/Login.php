<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
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
			$name = $data['username'];
			$password = $data['password'];
			$this->session->set_userdata('user',(object)Array("nombre"=>$name));
			echo "Bienvenido ".$name;
			return;
		}
		else{
			echo "No derrapes!";
			return;
		}
	}
	public function salir(){
		$this->session->unset_userdata('user');
		redirect('dashboard');
	}
}
