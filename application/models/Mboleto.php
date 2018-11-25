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
    public function get($id_boleto){
      $q = "SELECT e.nombre_evento nombre_evento,e.fecha fecha,e.auditorio lugar,u.nombre nombre,b.qr_key qr from Boletos b
join Eventos e on b.evento = e.id_evento
join Usuarios u on b.usuario = u.id_usuario
where b.id_boleto='".$id_boleto."';";
      $data = $this->db->query($q);
      if(!$data)
        return Array();
      else{
        return $data->result()[0];
      }
    }
}
