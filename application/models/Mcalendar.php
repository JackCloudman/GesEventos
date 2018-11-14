<?php
/**
 * Created by PhpStorm.
 * User: jonat
 * Date: 11/13/2018
 * Time: 11:40 PM
 */

class Mcalendar extends CI_Model
{
    public function getEventos(){
        $this->db->select('id_evento id,nombre_evento title,fecha start');
        $this->db->from('Eventos');
        return $this->db->get()->result();
    }
}
