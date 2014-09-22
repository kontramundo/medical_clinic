<?php
class Consentimiento  extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('historia_clinica_model');
	}

	public function index()
	{

		$data['estados'] = $this->historia_clinica_model->query_select_estados();
		$data['heredofamiliares'] = $this->historia_clinica_model->query_select_where(array('borrado' => '0'), 'nombre', 'cat_heredofamiliares');
		$data['patologicos'] = $this->historia_clinica_model->query_select_where(array('borrado' => '0'), 'nombre', 'cat_patologicos');
		$data['no_patologicos'] = $this->historia_clinica_model->query_select_where(array('borrado' => '0'), 'nombre', 'cat_no_patologicos');
		$data['obstetricos'] = $this->historia_clinica_model->query_select_where(array('borrado' => '0'), 'nombre', 'cat_obstetricos');

		$this->load->view('templates/header');
		$this->load->view('paginas/consentimiento', $data);
		$this->load->view('templates/footer');
	}
}
?>