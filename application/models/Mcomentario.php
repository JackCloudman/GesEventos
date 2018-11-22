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
		//Ya inserta comentarios

		/*$this->db->select('evento');
		$this->db->from('comentarios');
		$this->db->join('eventos', 'eventos.id_evento = comentarios.evento');
		$this->db->where(); //Aqui iria el boleto para unir el id del evento con el comentario
		$param['evento']=$this->db->get();*/
		$param['evento'] = 1;
		$data = Array("usuario"=>$param['usuario'],
                      "evento"=>$param['evento'],
                      "texto"=>$param['texto']
                  );
		$this->db->insert('comentarios',$data);
	}

	public function getComentarios(){
		$this->db->select('usuario, nombre, appat, apmat, id_comentario, texto');
		$this->db->from('comentarios');
		$this->db->join('usuarios', 'comentarios.usuario = usuarios.id_usuario');
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

	public function getNombreEvento(){ 
		$this->db->select('id_evento, nombre_evento, evento');
		$this->db->from('comentarios');
		$this->db->join('eventos', 'comentarios.evento = eventos.id_evento');
		$coment = $this->db->get_where();//Aqui iria el boleto para unir el id del evento con el comentario
		if(!isset($coment))
			return Array();
		return $coment;
	}
}