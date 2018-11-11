<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class DocCalendario extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocCalendario');
		$this->load->view('footers/vfooter');
	}
}