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
    function createRestoreURL($id_usuario){
        $data = Array();
        $fecha = date('Y-m-d H:i:s');
        $clave = $fecha."".$id_usuario;
        $TOKEN = hash('sha256',$clave);

        $data['usuario'] = $id_usuario;
        $data['fecha_creacion'] = $fecha;
        $data['usado'] = 0;
        $data['token'] = $TOKEN;

        if($this->db->insert('Tokens',$data))
            return $TOKEN;
        else
            return false;

    }
    public function getIdByEmail($correo){
      $this->db->select('id_usuario');
      $this->db->from('Usuarios');
      $this->db->where('correo',$correo);
      $id = $this->db->get()->row_array();
      if(!$id)
        return false;
      return $id['id_usuario'];
    }
    function verifyTOKEN($TOKEN){
        $q = "SELECT usado,fecha_creacion from Tokens where token='".$TOKEN."';";
        $result = ($this->db->query($q))->result();
        if(!$result)
            return Array("codigo"=>false,"respuesta"=>"La clave no existe!");
        if(($result[0])->usado)
            return Array("codigo"=>false,"respuesta"=>"Ya usaste este token!");

        $fecha_creacion = ($result[0])->fecha_creacion;
        $fecha_expira = date('Y-m-d H:i:s',strtotime($fecha_creacion. ' + 3 days'));
        $fecha_actual = date('Y-m-d H:i:s');

        if($fecha_actual<=$fecha_expira)
            return Array("codigo"=>true,"respuesta"=>"Clave encontrada!");
        else
            return Array("code"=>false,"respuesta"=>"Clave expirada!");
    }
    function updatePassword($TOKEN=null,$password=null){
      if(!$TOKEN||!$password) //Modo paranoic ON XD
            return false;
      $q = "SELECT usuario from Tokens where token='".$TOKEN."' and usado=0;";
      $result = ($this->db->query($q))->result();
      if(!$result)
        return false;
      $id_user = ($result[0])->usuario;
      $this->db->where('id_usuario', $id_user);
      $this->db->update('Usuarios', Array("password"=>password_hash($password, PASSWORD_DEFAULT)));
      if($this -> db -> affected_rows() == 1){
          $this->db->where('token', $TOKEN);
          $this->db->update('Tokens', Array("usado"=>1));
       }
        return ($this->db->affected_rows() == 1);
    }

}
