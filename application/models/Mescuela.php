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
    public function getEscuelaByAdmin($id_admin){
      $q="SELECT * from Escuelas es
      join Administradores a on es.id_escuela=a.escuela 
      where a.usuario = '".$id_admin."';";
      $result = $this->db->query($q)->result();
      if(!$result)
        return false;
      return $result[0];
    }
  
}