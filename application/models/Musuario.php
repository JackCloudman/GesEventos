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
        function createRestoreURL($user_id){

        $data = Array();

        $date = date('Y-m-d H:i:s');

        $data['user'] = $user_id;

        $data['fecha_creacion'] = $date;

        $data['usado'] = "no";

        $clave = $date."".$user_id;

        $TOKEN = hash('sha256',$clave);

        $data['token'] = $TOKEN;

        if($this->db->insert('token',$data))

            return $TOKEN;

        else

            return false;

    }
        public function getid($correo){
      $this->db->select('id_usuario');
      $this->db->from('Usuarios');
      $this->db->where('correo',$correo);
      $id = $this->db->get()->row_array();
      if(!$id)
        return false;
      return $id;
    }
    function verifyTOKEN($TOKEN){

        $q = "SELECT usado,fecha_creacion from token where token='".$TOKEN."';";

        $result = ($this->db->query($q))->result();

        if(!$result)

            return Array("code"=>false,"message"=>"La clave no existe!");

        if(($result[0])->usado)

            return Array("code"=>false,"message"=>"Ya usaste este token!");

        $fecha_creacion = ($result[0])->fecha_creacion;

        $fecha_expira = date('Y-m-d H:i:s',strtotime($fecha_creacion. ' + 3 days'));

        $fecha_actual = date('Y-m-d H:i:s');

        if($fecha_actual<=$fecha_expira)
            return Array("code"=>true,"message"=>"Clave encontrada!");

        else
            return Array("code"=>false,"message"=>"Clave expirada!");


    }
        function updatePassword($TOKEN=null,$password=null){
        if(!$TOKEN||!$password)
            return false;
        $q = "SELECT user from token where token='".$TOKEN."' and usado=0;";
        $result = ($this->db->query($q))->result();
        if(!$result)
            return false;
        $id_user = ($result[0])->user;
        $this->db->where('id_usuario', $id_user);
        $this->db->update('Usuarios', Array("password"=>$password));
        if($this -> db -> affected_rows() == 1){
            $this->db->where('token', $TOKEN);
            $this->db->update('token', Array("usado"=>1)); 
       }
        return ($this -> db -> affected_rows() == 1);
    }
  
}