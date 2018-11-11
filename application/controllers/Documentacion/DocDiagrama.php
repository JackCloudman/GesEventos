<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class DocDiagrama extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocDiagrama');
		$this->load->view('footers/vfooter');
	}
}