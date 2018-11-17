<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NuevoEvento extends CI_Controller {
	function __construct(){
  		parent::__construct();
  		$this->load->library('session');
 		$user = $this->session->userdata("user");
 		if(!$user){
			redirect('login');
		}
		$this->load->model('mevento');
  	}
  	
	public function index()
	{
		$escuelas['escuelas']=$this->mevento->allEscuelas();
		$this->load->view('headers/vheader',array("title"=>"hola mundo"));
		$this->load->view('vformevento', $escuelas);
		$this->load->view('footers/vfooter');
	}
	public function addEvento()
	{
		if(!$this->input->post()){
			return;
		}
		$data = $this->input->post();
;		if(isset($data['nombre_evento'])&&isset($data['ponente'])&&isset($data['descripcion'])&&isset($data['fecha'])&&isset($data['escuela'])&&isset($data['Auditorio'])&&isset($data['hora_inicio']))
		{
			$nombre_evento = $data['nombre_evento'];
			$ponente = $data['ponente'];
			$descripcion = $data['descripcion'];
			$fecha = $data['fecha'];
			$escuela = $data['escuela'];
			$auditorio = $data['Auditorio'];
			$hora_inicio = $data['hora_inicio'];
		}
		$result = $this->mevento->addEvento($nombre_evento,$ponente,$descripcion,$fecha,$escuela,$auditorio,$hora_inicio);
			if($result){
				print_r($data);
				return;
			}
			else{
			echo "No derrapes xd";
			print_r($data);
			}
		return;

	}
}
