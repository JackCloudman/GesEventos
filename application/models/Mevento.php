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
                      "escuela"=>1,
                      "auditorio"=>$Auditorio,
                      "hora_inicio" => $hora_inicio);
        $result = $this->db->insert('Eventos', $data);
        return $result;
	}
	public function infoPorEvento()
	{
		$this->db->select('nombre_evento, fecha, escuela, hora_inicio');
		$this->db->from('Eventos');
		return $this->db->get()->result(); 

	}

    public function getEvento($idEvento){
        $this->db->select('*');
        $this->db->from('Eventos');
        $query='id_evento = '.$idEvento;
        $this->db->where($query);
        $data=$this->db->get()->result();
        return $data;
    }
	

}

 ?>
