<?php
/**
 * Created by PhpStorm.
 * User: jonat
 * Date: 11/13/2018
 * Time: 8:32 PM
 */
class Calendar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mevento');
    }
    public function index(){

        $this->load->view('headers/vheader',array("title"=>"hola mundo"));
        $this->load->view('vcalendario');
        $this->load->view('footers/vfooter');

    }
    public function getEventos(){
        $r= $this->Mevento->getEventosCal();
        echo json_encode($r);
    }
}
//ELIMINAR MODELO DEL CALENDARIO, EL METODO GETEVENTOS PASARLO AL MODELO DE EVENTOS
