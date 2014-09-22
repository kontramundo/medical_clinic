<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Sesion extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('sesion_model');
	}

	public function index()
	{
		$this->load->view('sesion/login');
	}

	public function login()
	{
		$campos=$this->input->post('campos');
		parse_str($campos, $campo);

		$usuario  = trim($campo['usuario']);
		$password = trim($campo['password']);
		
		$resultado=$this->sesion_model->login($usuario, $password);

		if($resultado)
		{
			if($resultado->res==1)
			{
				$sess_array = array(
				  'id_usuario' => $resultado->id_usr,
				  'usuario' => $resultado->usr
			    );
			    $this->session->set_userdata($sess_array);

			    echo 1;
			}
		}	
	}

	public function logout()
	{
		$this->session->sess_destroy();

   	 	redirect(base_url('sesion'), 'location', '301');
	}

	public function recuperar_password()
	{
		$campos=$this->input->post('campos');
		parse_str($campos, $campo);

		$usuario  = trim($campo['usuario_r']);
		$id_rec=uniqid();
		
		$resultado=$this->sesion_model->recuperar_password($usuario, $id_rec);

		if($resultado)
		{
			if($resultado->res==1)
			{
				/*
				$datos = array(
               		'nombre' => $resultado->po_nombre,
            		'url' => $id_rec
          		);


				//HTML NEWSLETTER
				$newsletter=$this->load->view('newsletter/recuperar_password', $datos, TRUE);


				//Configura Libreria MAIL
				$this->load->library('email');

				$config['protocol'] = "smtp";
				$config['smtp_host'] = "ssl://smtp.gmail.com";
				$config['smtp_port'] = "465";
				$config['smtp_user'] = "heisenb3rg@gmail.com"; 
				$config['smtp_pass'] = "CHE2988.";
				$config['charset'] = "utf-8";
				$config['mailtype'] = "html";
				$config['newline'] = "\r\n";

				$this->email->initialize($config);

				$this->email->from('kontramundos@gmail.com', 'Medical Clinic');
				$this->email->to('heisenb3rg@gmail.com'); 

				$this->email->subject('Recuperación de Password');
				$this->email->message($newsletter);	

				$this->email->send();
				*/
			    echo 1;
			}
			else if($resultado->res==2)
			{
				echo 2;
			}
		}	
	}
}