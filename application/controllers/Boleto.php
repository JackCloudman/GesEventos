<?php
class Boleto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        require_once(APPPATH . '../vendor/autoload.php');
    }
    public function index(){
      $mpdf = new \Mpdf\Mpdf([
      	'margin_left' => 20,
      	'margin_right' => 15,
      	'margin_top' => 25,
      	'margin_bottom' => 25,
      	'margin_header' => 10,
      	'margin_footer' => 10,
      	'showBarcodeNumbers' => FALSE
      ]);
      $html=$this->load->view('vindex',[],true);
      $mpdf->WriteHTML("<p>hola mundo</p>");
      $mpdf->Output(); // opens in browser

    }
}
