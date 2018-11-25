<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Musuario extends CI_Model{
    public function exist($username,$email){
        $this->db->select('id_usuario'); 
        $this->db->from('Usuarios');
        $this->db->where('username',$username);
        $this->db->or_where('correo',$email);
        $user = $this->db->get()->result_array();
        if(!$user)
            return false;
        return true;
    }
    public function existUsername($username){
      $q = "select 1 from Usuarios where username='".$username."';";
      $result = $this->db->query($q)->result();
      if(!$result)
        return false;
      return true;
    }
    public function existEmail($email){
      $q = "select 1 from Usuarios where correo='".$email."';";
      $result = $this->db->query($q)->result();
      if(!$result)
        return false;
      return true;
    }
    public function register($nombre,$appat,$apmat,$username,$email,$password,$ocupacion,$edad,$sexo){
        $data = Array("nombre"=>$nombre,
                      "appat"=>$appat,
                      "apmat"=>$apmat,
                      "username"=>$username,
                      "correo"=>$email,
                      "password"=>password_hash($password, PASSWORD_DEFAULT),
                      "ocupacion" => $ocupacion,
                      "edad" => $edad,
                      "sexo" => $sexo);
        $result = $this->db->insert('Usuarios', $data);
        return $result;
    }
    public function getName($uid){
      $this->db->select('nombre,appat,apmat');
      $this->db->from('Usuarios');
      $this->db->where('id_usuario',$uid);
      $name = $this->db->get()->row_array();
      if(!$name)
        return Array("nombre"=>"INDEFINIDO","appat"=>"INDEFINIDO","apmat"=>"INDEFINIDO");
      return $name;
    }
  
}