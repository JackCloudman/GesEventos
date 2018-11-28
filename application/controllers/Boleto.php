<?php
class Boleto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        require_once(APPPATH . '../vendor/autoload.php');
        $this->load->model('mboleto');
    }
    public function index(){
      return;
    }
    public function imprimir($id_boleto=null){
      if(!$id_boleto)
        return;
        $mpdf = new \Mpdf\Mpdf([
        	'margin_left' => 20,
        	'margin_right' => 15,
        	'margin_top' => 25,
        	'margin_bottom' => 25,
        	'margin_header' => 10,
        	'margin_footer' => 10,
        	'showBarcodeNumbers' => FALSE
        ]);
        $boleto = $this->mboleto->get($id_boleto);
        if(!$boleto)
          return;
        $html=$this->load->view('Guest/vboleto',Array("boleto"=>$boleto),true);
         $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
    }
}
