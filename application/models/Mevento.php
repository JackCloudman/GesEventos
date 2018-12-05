<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Mevento extends CI_Model
{
    public function addEvento($data){
        $data["hora_inicio"] = date("H:i:s",strtotime($data["hora_inicio"]));
        $result = $this->db->insert('Eventos', $data);
        return $result;
    }
    public function EDITEvento($data){
        $result = $this->db->insert('Eventos', $data);
        return $result;
    }
	public function infoPorEvento()
	{
		$this->db->select('t1.nombre_evento, t1.fecha, t1.escuela, t1.hora_inicio, t1.descripcion, t1.id_evento, t2.nombre,t1.foto');
				$this->db->from('Eventos AS t1, Escuelas As t2');
				$this->db->where('t2.id_escuela = t1.escuela');
				return $this->db->get()->result();
	}
  public function search($coincidencia){
    $this->db->select('*')
         ->from('Escuelas')
         ->join('Eventos', 'Eventos.escuela = Escuelas.id_escuela')
         ->where("Eventos.fecha>=CURDATE()")
         ->like("Eventos.nombre_evento",$coincidencia)
         ->or_like("Eventos.descripcion",$coincidencia)
         ->or_like("Eventos.ponente",$coincidencia)
         ->or_like("Escuelas.nombre",$coincidencia)
         ->or_like("Eventos.auditorio",$coincidencia);
    return $this->db->get()->result();
  }
	/*public function allEscuelas()
	{
		$this->db->select('*');
		$this->db->from('Escuelas');
		return $this->db->get()->result();

	}*/
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
		$q = "SELECT es.*,e.*,(SELECT COUNT(1) FROM Boletos b WHERE b.evento = e.id_evento) AS inscritos from Eventos e
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
        $this->db->join('Escuelas','Eventos.escuela = Escuelas.id_escuela');
        return $this->db->get()->row();
    }

    public function getEventosCal(){
        $this->db->select('id_evento id,nombre_evento title,fecha start');
        $this->db->from('Eventos');
        return $this->db->get()->result();
    }
    public function isdisponible($id_evento){
      $this->db->select("count(1) n_boletos");
      $this->db->from('Boletos');
      $this->db->where('evento',$id_evento);
      $boletos_registrados =  $this->db->get()->row()->n_boletos;
      $this->db->select("boletos");
      $this->db->from('Eventos');
      $this->db->where('id_evento',$id_evento);
      $boletos_totales  = $this->db->get()->row()->boletos;
      return $boletos_totales - $boletos_registrados;
    }
		public function inscribir($id_usuario,$id_evento){
			$data = [
				"usuario" => $id_usuario,
				"evento"	=> $id_evento,
				"qr_key" 	=> sha1($id_usuario.$id_evento)
			];
			return $this->db->insert('Boletos',$data);
		}

		public function EditarEvento($data){
			 $this->db->where('id_evento',$data['id_evento']);
			 $this->db->where('escuela',$data['escuela']);
			 $result= $this->db->update('Eventos',$data);
			return $result;
		}
		public function obtain_events_user($id= null){
		      $this->db->select('*');
		      $this->db->from('Boletos');
		      $this->db->where('usuario',$id);
		      $this->db->join('Eventos', 'Eventos.id_evento = Boletos.evento');
		   	  return $this->db->get()->result();
    }
}

 ?>
