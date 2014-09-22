<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Email extends CI_Email
{
	public function enviar_email($email, $asunto, $msj)
	{
		if($email && $asunto && $msj)
		{
			//Configura Libreria MAIL
			$config['protocol'] = "smtp";
			$config['smtp_host'] = "ssl://smtp.gmail.com";
			$config['smtp_port'] = "465";
			$config['smtp_user'] = "heisenb3rg@gmail.com"; 
			$config['smtp_pass'] = "Chapulin2988.CHE";
			$config['charset'] = "utf-8";
			$config['mailtype'] = "html";
			$config['newline'] = "\r\n";

			$this->initialize($config);

			$this->from('cotizador@kontramundo.com', 'Cotizador');
			$this->to($email); 

			$this->subject($asunto);
			$this->message($msj); 

			return $this->send();
		}
	}
}
?>