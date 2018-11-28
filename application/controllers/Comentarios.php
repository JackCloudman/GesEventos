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
        $this->load->model('mevento');
    }

    public function Dejar_comentario()
    {
        $data["id_evento"] = $this->uri->segment(3);
        $evento= $this->mevento->getEvento($data["id_evento"]);
        $data = array("title"=>"Comentarios");
        $data["nom_evento"] = $evento;
        $this->load->view('headers/vheader',$data);
        $this->load->view('vComentario');
        $this->load->view('footers/vfooter');
    }

    public function enviar_comentario(){
        if(!$this->input->post()){
            echo "Vacio";
        }
        $data = $this->input->post();
        $param["id_evento"] = $this->uri->segment(3);
        $param['usuario'] = $this->usuario->id_usuario;
        $param['texto'] = $this->input->post('txtcomentario');
        if($this->Mcomentario->verificarUsuario($param['usuario'])) //Para que solo se pueda meter un comentario por usuario
            $this->Mcomentario->guardarComentario($param);
        redirect('dashboard');
    }

    public function lista_comentarios(){
        if($this->usuario->nivel<2){
            redirect('dashboard');  
        }
        $data["evento"] = $this->uri->segment(3);
        $coment=$this->Mcomentario->getComentarios($data["evento"]);
        $evento= $this->mevento->getEvento($data["evento"]);
        $data = array("title"=>"Comentarios");
        $data["nom_evento"] = $evento;
        $data["coment"] = $coment;
        $this->load->view('headers/vheader',$data);
        $this->load->view('vComentarioLista');
        $this->load->view('footers/vfooter');
    }

    public function borrar_comentario(){
        if($this->usuario->nivel<2){
            redirect('dashboard');  
        }
        $data = $this->uri->segment(4);
        $coment=$this->Mcomentario->borrar_Comentarios($data);
        $evento = $this->uri->segment(3);;
        redirect("Comentarios/lista_comentarios/$evento");
    }

}