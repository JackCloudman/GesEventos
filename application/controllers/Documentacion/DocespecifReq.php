<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class DocespecifReq extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocespecifReq');
		$this->load->view('footers/vfooter');
	}
}