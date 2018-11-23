<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Recovery extends CI_Controller {

	function __construct(){

        parent::__construct();
        $this->load->library('email');
        $this->load->config('mail');
        $email_settings = $this->config->item('email');
        $this->email->initialize($email_settings);
  		$this->load->model('musuario');

		if($this -> session -> userdata('user'))

			redirect('dashboard', 'refresh');

    }

	public function index(){

    	$this-> load ->view("recovery");

	}



	public function doit(){

		$email = $this -> input -> post('mail');


		$exist = $this->musuario->existEmail($email);
		$id = $this->musuario->getid($email);

		if(!$exist){

			$data_json['result'] = "failed";

	    	$data_json['message'] = "No encontramos tu usuario en nuestros registros.";

	    	echo json_encode($data_json, JSON_PRETTY_PRINT);

			}else{


				$this->sendMail($email, $id['id_usuario']);

			}



	}

	public function reset($TOKEN=null){

		if(!$TOKEN){
			redirect('Login','refresh');
		}

		$verify = $this->musuario->verifyTOKEN($TOKEN);

		if($verify['code']){

			$this->load->view('vnewpasword',["TOKEN"=>$TOKEN]);

		}

		else{

			redirect('Login','redirect');

		}

	}

	public function changepassword(){



		$pass1 = $this -> input -> post('pass1');

		$pass2 = $this -> input -> post('pass2');

		$token = $this->input->post('token');
		echo "hola".$pass1;
		echo "hola".$pass2;
		echo "hola".$token;

		if(!$pass1||!$pass2||!$token){

			$data_json['result'] = "failed";

	    	$data_json['message'] = "Te falta ingresar datos!";

	    	echo json_encode($data_json, JSON_PRETTY_PRINT);

	    	return;

		}

		if($pass1!=$pass2){

			$data_json['result'] = "failed";

	    	$data_json['message'] = "Las contraseñas no coinciden!";

	    	echo json_encode($data_json, JSON_PRETTY_PRINT);

	    	return;

		}

		#Verificamos nuevamente el token!

		$verify = $this->musuario->verifyTOKEN($token);

		if($verify['code']){

			$result = $this->user->updatePassword($token,$pass1);

			if($result){

			  $data_json['result'] = "sended";

	    	  $data_json['message'] = "Contraseña cambiada!";

			}

			else{

			  $data_json['result'] = "failed";

	    	 $data_json['message'] = "No se pudo actualizar la contraseña, contacta con un administrador!";

			}

		}else{

			$data_json['result'] = "failed";

	    	$data_json['message'] = $verify['message'];

		}

		echo json_encode($data_json, JSON_PRETTY_PRINT);

	}



	private function sendMail( $email, $id){


		if(strlen($email) == 0){

	    	$data_json['result'] = "failed";

			$data_json['message'] = "Parece que no nos has proporcionado tu correo electrónico.";

	    	echo json_encode($data_json, JSON_PRETTY_PRINT);

	    	return;

	    }

		# URL para cambiar la contraseña

		$TOKEN =  $this->musuario->createRestoreURL($id);

		#

		# Asunto

		$asunto = "Acceso al sistema escolar";

		# Variables del cuerpo

		#

		$gesCelex = "http://www.juanjoserv.com/";

		$imagenLogo = '<img height="32" src="'.$gesCelex.'assets/email/celex.png"style="width:92px;height:32px" width="92">';

		$corners[0] = $gesCelex."assets/email/4-corner-nw.png";

		$corners[1] = $gesCelex."assets/email/4-corner-ne.png";

		$corners[2] = $gesCelex."assets/email/4-corner-sw.png";

		$corners[3] = $gesCelex."assets/email/4-corner-se.png";

		$pixels[0] = $gesCelex."assets/email/4-pixel-n.png";

		$pixels[1] = $gesCelex."assets/email/4-pixel-w.png";

		$pixels[2] = $gesCelex."assets/email/4-pixel-e.png";

		$pixels[3] = $gesCelex."assets/email/4-pixel-s.png";

		$headMensaje = "Parece que has olvidado tu contraseña";

		$breveMensaje = "<br><a href='http://localhost/GesEventos/Recovery/reset/".$TOKEN."'>Puedes usar este enlace para cambiar la contraseña.</a>";

		$footMensaje = "Por favor, trata de recordar tu contraseña o guardarla en un lugar seguro. No respondas a este correo.";

		$anioActual = date('Y');

		# Cuerpo del correo

		$body_msg = '<html><head><style>.awl a{color: #FFFFFF;text-decoration: none;}.abml a{color: #000000;font-family: Roboto-Medium,Helvetica,Arial,sans-serif;font-weight: bold;text-decoration: none;}.adgl a{color: rgba(0, 0, 0, 0.87);text-decoration: none;}.afal a{color: #b0b0b0;text-decoration: none;}@media screen and (min-width: 600px){.v2sp{padding: 6px 30px 0px;}.v2rsp{padding: 0px 10px;}}</style></head><body bgcolor="#FFFFFF" style="margin: 0; padding: 0;"><table border="0" cellpadding="0" cellspacing="0" height="100%" style="min-width:8px;" width="100%"> <tbody> <tr height="32px"></tr><tr align="center"> <td> <table border="0" cellpadding="0" cellspacing="0" style="padding-bottom: 20px; max-width: 600px; min-width: 220px;"> <tbody> <tr> <td> <table cellpadding="0" cellspacing="0"> <tbody> <tr> <td></td><td><table border="0" cellpadding="0" cellspacing="0" style="direction: ltr; padding-bottom: 7px;" width="100%"> <tbody> <tr> <td align=left></td><td align="right" style="font-family:Roboto-Light, Helvetica, Arial, sans-serif;">'.$email.'</td></tr></tbody></table> </td><td></td></tr><tr> <td height="5" style="background:url('.$corners[0].') top left no-repeat;" width="6"><div></div></td><td height=5 style="background:url('.$pixels[0].') top center repeat-x;"><div></div></td><td height=5 style="background:url('.$corners[1].') top right no-repeat;" width="6"><div></div></td></tr><tr> <td style="background:url('.$pixels[1].') center left repeat-y;" width="6"> <div></div></td><td> <div style="font-family: Roboto-Regular, Helvetica, Arial, sans-serif;padding-left: 20px; padding-right: 20px;border-bottom: thin solid #f0f0f0; color: rgba(0,0,0,0.87); font-size: 24px;padding-bottom: 38px;padding-top: 40px;text-align: center; word-break: break-word;"> <div class=v2sp>'.$headMensaje.'<br/> <span style="font-family: Roboto-Regular, Helvetica, Arial, sans-serif;color: rgba(0,0,0,0.87);font-size: 16px; line-height: 1.8;">"Usuario"</span> </div></div><div style="font-family: Roboto-Regular,Helvetica,Arial,sans-serif; font-size: 13px; color: rgba(0,0,0,0.87); line-height: 1.6;padding-left: 20px; padding-right: 20px;padding-bottom: 32px; padding-top: 24px;"> <div class=v2sp>'.$breveMensaje.'<div style="padding-top: 24px; text-align: center;"> <a href="https://ges.celexez.org/login/" style="display:inline-block; text-decoration: none;" target="_blank"> <table border="0" cellpadding="0" cellspacing="0" style="background-color: #4184F3; border-radius: 2px; min-width: 90px;"> <tbody><tr style="height: 6px;"></tr><tr><td style="padding-left: 8px;padding-right: 8px; text-align: center;"><a href="https://ges.celexez.org/login/" style="font-family: Roboto-Regular,Helvetica,Arial,sans-serif; color: #ffffff; font-weight: 400; line-height: 20px; text-decoration: none;font-size: 13px;" target="_blank">Iniciar sesión</a></td></tr><tr style="height: 6px;"></tr></tbody> </table></a></div></div></div></td><td style="background:url('.$pixels[2].') center left repeat-y;" width="6"><div></div></td></tr><tr> <td height="5" style="background:url('.$corners[2].') top left no-repeat;" width=6><div></div></td><td height="5" style="background:url('.$pixels[3].') top center repeat-x"><div></div></td><td height="5" style="background:url('.$corners[3].') top left no-repeat;" width="6"><div></div></td></tr><tr><td></td><td><div style="text-align: left;"><div style="font-family: Roboto-Regular,Helvetica,Arial,sans-serif;color: rgba(0,0,0,0.54); font-size: 12px; line-height: 20px; padding-top: 10px;"><div>'.$footMensaje.'</div><div style="direction:ltr;">'.$anioActual.' <a class=afal style="font-family: Roboto-Regular,Helvetica,Arial,sans-serif;color: rgba(0,0,0,0.54); font-size: 12px; line-height: 20px; padding-top: 10px;"></a></div></div><div style="display: none !important; mso-hide:all; max-height:0px; max-width:0px;"></div></div></td><td></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr height="2px"></tr></tbody></table></body></html>';

	    # Headers del correo

		$this->email->set_mailtype("html");

	    $this->email->set_newline("\r\n");

	    $this->email->from("no-reply@juanjoserv.com");

	    $this->email->subject($asunto);

	    $this->email->message($body_msg);

	    $this->email->to($email);

	    $result = $this->email->send();

	    # Censurar correo

	    $arr_email = explode("@", $email);

	    $correoCensurado = mb_substr($arr_email[0], 0, 3);

	    $correoX = "";

 		for ($i = 0; $i < strlen($arr_email[0]); $i++) {

 			$correoX .= "*";

 		}

 		$correoCensurado .= mb_substr($correoX, 4, strlen($arr_email[0]));

 		$correoCensurado .= "@".$arr_email[1];

 		# Mostrar mensaje

	    if($result){

	    	$data_json['result'] = "sended";

	    	$data_json['message'] = "Tu contaseña se ha enviado al correo ".$correoCensurado.". Por favor, checa tu bandeja de entrada.";

	    	$data_json['info'] =  $this -> email -> print_debugger(array('headers'));

	    }else {

			$data_json['result'] = "failed";

			$data_json['message'] = "Ha habido un problema. Por favor, intenta de nuevo.";

	    	$data_json['info'] =  $this -> email -> print_debugger(array('headers'));

	    }

	    echo json_encode($data_json, JSON_PRETTY_PRINT);

	}


}

?>
