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
        $this->load->model('MverEvento');
    }
    public function index($idEvento){

        $this->load->view('headers/vheader',array("title"=>"hola mundo"));
        $this->load->view('Vverevento');
        $this->load->view('footers/vfooter');

        //$s_evento = array(  );

    }
    public function getEvento($idEvento){

        $r= $this->MverEvento->getEvento($idEvento);

        echo json_encode($r);
    }
}
