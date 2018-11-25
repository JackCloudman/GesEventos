<?php
class Email extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->config('mail');
        $email_settings = $this->config->item('email');
        $this->email->initialize($email_settings);
    }
    public function index(){
      echo "<form action='Email/doit' method='post'>
            To: <input type='text' name='to'><br>
            Subject: <input type='text' name='subject'><br>
            Message: <textarea rows='10' cols='30' name='message'></textarea>
            <input type='submit'></form>";
    }
    public function doit(){
      $data = $this->input->post();
      $this->email->set_mailtype("html");
    	$this->email->set_newline("\r\n");
    	$this->email->from("no-reply@juanjoserv.com");
    	$this->email->subject($data['subject']);
    	$this->email->message($data['message']);
    	$this->email->to($data['to']);
    	$result = $this->email->send();
      if($result){
        echo "Mensaje enviado con exito!";
      }
      else{
        echo "No se pudo enviar el mensaje!";
      }
    }
}
