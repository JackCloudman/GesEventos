<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Mevento extends CI_Model
{
	public function addEvento($data){
        $result = $this->db->insert('Eventos', $data);
        return $result;
	}
	public function infoPorEvento()
	{
		$this->db->select('nombre_evento, fecha, escuela, hora_inicio, descripcion, id_evento');
		$this->db->from('Eventos');
		return $this->db->get()->result();

	}
	public function getAllEventos(){
	  $q = "SELECT * from Eventos ev
		join Escuelas es on ev.escuela = es.id_escuela;";
	  return $this->db->query($q)->result();
	}
	public function deleteEvento($id_evento){
		return $this->db->delete('Eventos', array('id_evento' => $id_evento));
	}
	public function getEventosByEscuela($id_escuela){
		$q = "SELECT * from Eventos e
		join Escuelas es on es.id_escuela=e.escuela
		where escuela = '".$id_escuela."';";
	    $result = $this->db->query($q);
	    if(!$result)
	      return Array();
	    return $result->result();
	}
	public function getEvento($id_evento){
		$this->db->select("*");
		$this->db->from('Eventos');
		$this->db->where('id_evento',$id_evento);
		return $this->db->get()->row();
	}
}

 ?>
