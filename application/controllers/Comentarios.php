<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->usuario = $this->session->userdata("user");
        $this->load->model('Mcomentario');
        $this->load->model('Musuario');
        $this->load->model('Mevento');
        //Evento
    }
    public function index()
    {
        $this->load->view('headers/vheader',array("title"=>"Comentarios"));
        $this->load->view('vComentario');
        $this->load->view('footers/vfooter');
    }
    public function enviar_comentario(){
        if(!$this->input->post()){
            echo "Vacio";
            return;
        }
        $data = $this->input->post();
        $param['usuario'] = $this->usuario->id_usuario;
        $param['texto'] = $this->input->post('txtcomentario');
        $this->Mcomentario->guardarComentario($param);
        redirect(Dashboard);
        return;
    }
}