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
        $this->load->model('Mevento');
    }
    public function index(){

        $this->load->view('headers/vheader',array("title"=>"hola mundo"));
        $this->load->view('Vverevento');
        $this->load->view('footers/vfooter');

    }
    public function getEvento($idEvento){
        $evento= $this->Mevento->getEvento($idEvento);


        $data = array("title"=>"EVENTOS");
        $data["eventos"] = json_encode($evento);
        $this->load->view('headers/vheader',array("title"=>"hola mundo"));
        $this->load->view('Vverevento',$data);
        $this->load->view('footers/vfooter');

    }
}
