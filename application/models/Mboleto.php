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
    public function getAllinfo($id_boleto){
      $q = "SELECT e.nombre_evento nombre_evento,e.fecha fecha,e.auditorio lugar,b.qr_key qr,
      e.hora_inicio hora_inicio, concat(u.nombre,' ',u.appat,' ',u.apmat) nombre, u.correo correo,es.nombre escuela from Boletos b
      join Eventos e on b.evento = e.id_evento
      join Usuarios u on b.usuario = u.id_usuario
      join Escuelas es on e.escuela = es.id_escuela
      where b.id_boleto='".$id_boleto."';";
      $data = $this->db->query($q)->result();
      if(!$data)
        return Array();
      else{
        return $data[0];
      }
    }
}
