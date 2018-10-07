<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('headers/vheader',array("title"=>"hola mundo"));
		$this->load->view('vdashboard');
		$this->load->view('footers/vfooter');
	}
}
