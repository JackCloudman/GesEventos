<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mescuela extends CI_Model{
    public function getEscuelas(){
      $this->db->select("*");
      $this->db->from("Escuelas");
      $result = $this->db->get()->result();
      if(!$result)
        return Array();
      return $result;
    }
  
}