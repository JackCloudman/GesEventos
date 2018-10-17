<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Model
{
	
	public function getall()
	{
        $this->db->select('*'); 
        $this->db->from('Usuarios');
        return $this->db->get()->result_array();  //hacemos la consulta y la guarda en la la variable $resultado
	}
  
}