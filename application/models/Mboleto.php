<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mboleto extends CI_Model{
    public function getBoleto($id_usuario,$id_evento){
      $this->db->select('*');
			$this->db->from('Boletos');
			$this->db->where('usuario',$id_usuario);
			$this->db->where("evento",$id_evento);
			$data = $this->db->get()->result();
      if(!$data)
        return Array();
      else{
        return $data[0];
      }
    }
}
