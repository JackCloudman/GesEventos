<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->usuario = $this->session->userdata("user");
        if(!$this->usuario){
            redirect('login');
        }
        if($this->usuario->nivel==3)
            redirect('Superadmin');
        if($this->usuario->nivel==2)
            redirect('Admin');
        $this->load->model('mevento');
        $this->load->model('musuario');
    }
    public function index()
    {
        $usuario = $this->usuario;
        $datosh['head'] =$this->musuario->getName($usuario->id_usuario);
        $datos['datos'] = $this->mevento->infoPorEvento();
        $this->load->view('headers/vheaderuser',$datosh);
        $this->load->view('Guest/vdashboard',$datos);
        $this->load->view('footers/vfooter');
    }
    public function lista_eventos()
    {
        $datos = $this->mevento->infoPorEvento();
        return $datos;
    }
}
