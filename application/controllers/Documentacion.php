<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Documentacion extends CI_Controller
{	

	public function index()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vdoc');
		$this->load->view('footers/vfooter');
	}

	public function DocStakeHolder()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocstakeholder');
		$this->load->view('footers/vfooter');
	}

	public function DocReglasNeg()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocreglasneg');
		$this->load->view('footers/vfooter');
	}

	public function DocPlantProb()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocplantProb');
		$this->load->view('footers/vfooter');
	}

	public function DocObjetivos()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocobjetivo');
		$this->load->view('footers/vfooter');
	}

	public function DocMarcoDes()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocMarcoDes');
		$this->load->view('footers/vfooter');
	}

	public function DocespecifReq()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocespecifReq');
		$this->load->view('footers/vfooter');
	}

	public function DocDiagrama()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocDiagrama');
		$this->load->view('footers/vfooter');
	}

	public function DocCasosUso()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocCasosUso');
		$this->load->view('footers/vfooter');
	}

	public function DocCalendario()
	{
		$this->load->view('headers/vheaderDoc',array("title"=>"gesEvento"));
		$this->load->view('Documentacion/vDocCalendario');
		$this->load->view('footers/vfooter');
	}

}