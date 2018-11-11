<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Msuperadmin extends CI_Model{
    public function crearEscuela($datos_escuela,$datos_admin){
      $escuela = Array(
                  "nombre"  => $datos_escuela["nombre"],
                  "direccion1"    => $datos_escuela["dir1"],
                  "direccion2"    => $datos_escuela["dir2"],
                  );
      $result = $this->db->insert("Escuelas",$escuela);
      if(!$result){
        return false;
      }
      $id_escuela = $this->db->insert_id();
      $result = $this->crearAdministrador($id_escuela,$datos_admin);
      return $result;
    }
    public function crearAdministrador($id_escuela,$datos_admin){
      $user_admin = Array(
                      "username"      => "Admin".$id_escuela."_".$datos_admin["nombre"],
                      "nombre"        => $datos_admin["nombre"],
                      "appat"         => "",
                      "apmat"         => "",
                      "correo"        => $datos_admin["correo"],
                      "password"      => password_hash($datos_admin["password"],PASSWORD_DEFAULT),
                      "nivel_permiso" => 2,
                      );
      $result = $this->db->insert("Usuarios",$user_admin);
      if(!$result)
        return false;
      $id_user = $this->db->insert_id();
      $admin = Array(
                  "usuario" =>$id_user,
                  "escuela" =>$id_escuela,
                );
      $result = $this->db->insert("Administradores",$admin);
      return $result==true;
    }
    public function countAll(){
      $usuarios = $this->db->query("select count(*) numero from Usuarios");
      $eventos= $this->db->query("select count(*) numero from Eventos");
      $escuelas = $this->db->query("select count(*) numero from Escuelas");

      $data['usuarios'] = $usuarios->result()[0]->numero;
      $data['eventos'] = $eventos->result()[0]->numero;
      $data['escuelas'] = $escuelas->result()[0]->numero;

      return $data;
       
    }
  
}