<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class DocObjetivos extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocobjetivo');
		$this->load->view('footers/vfooter');
	}
}