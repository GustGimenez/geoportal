<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usual extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('usual_model','modelusual');
	}

	function novo_usual(){
		$this->load->view('html-header');
		$this->load->view('menu_home');
		$this->load->view('usual/cadastro_usual');
		$this->load->view('html-footer');
	}

	function cadastrar(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nome','Nome','required');
		$this->form_validation->set_rules('senha','Senha','required');
		$this->form_validation->set_rules('email','E-mail','required|valid_email|is_unique[usual.usual_email]');

		if($this->form_validation->run()){
			$dados['usual_email'] = $this->input->post('email');
			$dados['usual_senha'] = md5($this->input->post('senha'));
			$dados['usual_nome'] = $this->input->post('nome');
			
			$this->modelusual->inserir($dados);
			redirect(base_url('usual/novo_usual'));
		}
	}

	function login_area(){
		$this->load->view('html-header');
		$this->load->view('menu_home');
		$this->load->view('usual/logar_usual');
		$this->load->view('html-footer');
	}

	function logar(){
		$dados['usual_email'] = $this->input->post('email');
		$dados['usual_senha'] = md5($this->input->post('senha'));

		$result = $this->modelusual->logar($dados);

		if(count($result) == 0){
			echo "<script>alert('Usuário ou senha inválido')</script>";
			redirect(base_url('usual/login_area'));
		}
		else{
			$newdata = array(
				'id' => $result[0]->usual_id,
				'nome' => $result[0]->usual_nome,
				'email' => $result[0]->usual_email,
				'logado' => TRUE
			);

			$this->session->set_userdata($newdata);
			redirect(base_url('usual/logado'));
		}
	}

	function sair(){
		$data = array(
			'id',
			'nome',
			'email',
			'logado'		
		);

		$this->session->unset_userdata($data);
		redirect(base_url());
	}

	function logado(){
		$this->load->view('html-header');
		$this->load->view('usual/menu_usual');
		$this->load->view('usual/nova_colecao_model');
		$this->load->view('map');
		$this->load->view('script');
		$this->load->view('html-footer');
	}

	function listar_colecoes(){
		$this->load->model('colecao_model','modelcol');
		$dados['colecoes'] = $this->modelcol->listar_aprovadas();

		$this->load->view('html-header');
		$this->load->view('usual/menu_usual');
		$this->load->view('listar_colecoes',$dados);
		$this->load->view('html-footer');
	}
}
