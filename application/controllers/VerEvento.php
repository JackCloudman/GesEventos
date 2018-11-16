<?php
/**
 * Created by PhpStorm.
 * User: jonat
 * Date: 11/14/2018
 * Time: 2:38 PM
 */
class VerEvento extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mevento');
    }
    public function index(){

        $this->load->view('headers/vheader',array("title"=>"hola mundo"));
        $this->load->view('vverevento');
        $this->load->view('footers/vfooter');

    }
    public function getEvento($idEvento=null){
        if(!$idEvento)
            return;//Debe mandar la id!
        $evento= $this->mevento->getEvento($idEvento);
        if(!$evento){
            print("El evento no existe :P");
            return;
        }
        $data = array("title"=>"EVENTOS");
        $data["eventos"] = json_encode($evento);
        $this->load->view('headers/vheader',array("title"=>"hola mundo"));
        $this->load->view('vverevento',$data);
        $this->load->view('footers/vfooter');

    }
}
