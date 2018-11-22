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
		$this->db->select('t1.nombre_evento, t1.fecha, t1.escuela, t1.hora_inicio, t1.descripcion, t1.id_evento, t2.nombre');
				$this->db->from('Eventos AS t1, Escuelas As t2');
				$this->db->where('t2.id_escuela = t1.escuela');
				return $this->db->get()->result(); 
	}
	public function allEscuelas()
	{
		$this->db->select('*');
		$this->db->from('Escuelas');
		return $this->db->get()->result(); 

	}
	public function nombre_escuela($id_escuela)
	{
		$this->db->select('nombre');
		$this->db->from('Escuelas');
		$this->db->where('id_escuela',$id_escuela);
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
