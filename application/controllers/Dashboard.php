<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
        $this->load->model('mevento');
    }
    public function index()
    {


        $datos['datos'] = $this->mevento->infoPorEvento();
        $this->load->view('headers/vheaderuser',array("title"=>"Dashboard general"));
        $this->load->view('Guest/vdashboard',$datos);
        $this->load->view('footers/vfooter');
    }
    public function lista_eventos()
    {
        $datos = $this->mevento->infoPorEvento();
        return $datos;
    }
}
