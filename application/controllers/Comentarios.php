<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->usuario = $this->session->userdata("user");
        if(!$this->usuario){
            redirect('dashboard');  
        }
        $this->load->model('Mcomentario');
    }

    public function index()
    {
        $data = array("title"=>"Comentarios");
        //$data["nom_evento"] = $this->Mcomentario->getNombreEvento();;
        $data["nom_evento"] = "GBF";
        $this->load->view('headers/vheader',$data);
        $this->load->view('vComentario');
        $this->load->view('footers/vfooter');
    }

    public function enviar_comentario(){
        if(!$this->input->post()){
            echo "Vacio";
        }
        $data = $this->input->post();
        $param['usuario'] = $this->usuario->id_usuario;
        $param['texto'] = $this->input->post('txtcomentario');
        if($this->Mcomentario->verificarUsuario($param['usuario'])) //Para que solo se pueda meter un comentario por usuario
            $this->Mcomentario->guardarComentario($param);
        redirect(Dashboard);
    }

    public function lista_comentarios(){
        if($this->usuario->nivel<2){
            redirect('dashboard');  
        }
        $coment=$this->Mcomentario->getComentarios();
        $data = array("title"=>"Comentarios");
        $data["coment"] = $coment;
        $this->load->view('headers/vheader',$data);
        $this->load->view('vComentarioLista');
        $this->load->view('footers/vfooter');
    }

    public function borrar_comentario(){
        if($this->usuario->nivel<2){
            redirect('dashboard');  
        }
        $data = $this->uri->segment(3);
        $coment=$this->Mcomentario->borrar_Comentarios($data);
        redirect("Comentarios/lista_comentarios");
    }

}