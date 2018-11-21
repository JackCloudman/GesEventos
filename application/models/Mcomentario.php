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
}