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
        $result = $this->db->insert('eventos', $data);
        return $result;
	}
	public function infoPorEvento()
	{
		$this->db->select('nombre_evento, fecha, escuela, hora_inicio');
		$this->db->from('eventos');
		return $this->db->get()->result(); 

	}
	

}

 ?>