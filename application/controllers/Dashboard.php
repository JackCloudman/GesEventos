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
    }
    public function index()
    {
        $this->load->view('headers/vheader',array("title"=>"Dashboard general"));
        $this->load->view('vdashboard');
        $this->load->view('footers/vfooter');
    }
}
