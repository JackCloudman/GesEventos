<?php
/**
 * Created by PhpStorm.
 * User: jonat
 * Date: 11/14/2018
 * Time: 2:39 PM
 */

class MverEvento extends CI_Model
{
    public function getEvento($idEvento){


        $this->db->select('*');
        $this->db->from('Eventos');
        $query='id_evento = '.$idEvento;
        $this->db->where($query);
        $data=$this->db->get()->result();
        return $data;
        //$this->db->get()->result();
        //return $this->db->last_query();


        //$this->db->select('id_evento id,nombre_evento title,fecha start');
        //$this->db->from('Eventos');
        //return $this->db->get()->result();
    }
}
