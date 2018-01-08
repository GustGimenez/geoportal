<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller

class Participante extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Participante_model', 'model');
	}

	public function logar(){
		$dados['email_participante'] = $this->input->post('email');
		$dados['senha_participante'] = $this->input->post('senha');

		$result = $this->model->logar($dados);

		if(count($result) == 0){
			echo "<script>alert('Usuário ou senha inválido')</script>";
			redirect('home');
		}
		else{
			redirect(base_url('participante/area'));
		}

	}

	public function area(){
		$this->load->model('evento_model', 'modelevento');
		$dados['eventos'] = $this->modelevento->listAll();

		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('pessoa/area',$dados);
		$this->load->view('footer');
		$this->load->view('html-footer');
	}
}