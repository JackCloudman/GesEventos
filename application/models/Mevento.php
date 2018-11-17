<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Mevento extends CI_Model
{
	public function addEvento($nombre_evento,$ponente,$descripcion,$fecha,$escuela,$Auditorio,$hora_inicio){
		$data = Array("nombre_evento"=>$nombre_evento,
                      "ponente"=>$ponente,
                      "descripcion"=>$descripcion,
                      "fecha"=>$fecha,
                      "escuela"=>$escuela,
                      "auditorio"=>$Auditorio,
                      "hora_inicio" => $hora_inicio);
        $result = $this->db->insert('Eventos', $data);
        return $result;
	}
	public function infoPorEvento()
	{
		$this->db->select('t1.nombre_evento, t1.fecha, t1.escuela, t1.hora_inicio, t1.descripcion, t1.id_evento, t2.nombre');
				$this->db->from('Eventos AS t1, Escuelas As t2');
				$this->db->where('t2.id_escuela = t1.escuela');
				return $this->db->get()->result(); 
		/*$this->db->select('nombre_evento, fecha, escuela, hora_inicio, descripcion, id_evento');
		$this->db->from('Eventos');
		$this->db->join('Escuelas','Escuelas.id_escuela = Eventos.escuela');
		
		*/
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
}

 ?>
