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
		$this->db->insert('Comentarios',$data);
		return 1;
	}

	public function getComentarios($data){
		$this->db->select('usuario, nombre, appat, apmat, texto, evento, id_comentario');
		$this->db->from('Comentarios');
		$this->db->join('Usuarios', 'Comentarios.usuario = Usuarios.id_usuario');
		$this->db->where('evento',$data);
		$coment = $this->db->get();
		if(!isset($coment))
			return Array();
		return $coment;
	}

	public function borrar_Comentarios($data){
		$col = Array("id_comentario"=>$data
                  );
		$this->db->delete('Comentarios',$col);
	}

	public function verificarUsuario($param){
		$res = $this->db->get_where('Comentarios',$param);
		$res = $res->row();
		if(!$res)
			return true;
		return false;
	}

}
