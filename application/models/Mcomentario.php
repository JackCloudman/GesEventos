<?php
/**
 * 
 */
class Mcomentario extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardarComentario($param){
		$data = Array("usuario"=>$param['usuario'],
                      "evento"=>$param['id_evento'],
                      "texto"=>$param['texto']
                  );
		$this->db->insert('comentarios',$data);
	}

	public function getComentarios($data){
		$this->db->select('usuario, nombre, appat, apmat, texto, evento, id_comentario');
		$this->db->from('comentarios');
		$this->db->join('usuarios', 'comentarios.usuario = usuarios.id_usuario');
		$this->db->where('evento',$data);
		$coment = $this->db->get();
		if(!isset($coment))
			return Array();
		return $coment;
	}

	public function borrar_Comentarios($data){
		$col = Array("id_comentario"=>$data
                  );
		$this->db->delete('comentarios',$col);
	}

	public function verificarUsuario($param){ 
		$res = $this->db->get_where('comentarios', array('usuario' => $param));
		if(!isset($res))
			return true;
		return false;
	}

}