<?php
defined('BASEPATH') OR exit('No direct scirpt access allowed');

class Colecao extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('colecao_model','colemodel');
		$this->load->model('atributo_model','atrimodel');
	}

	function adicionar(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nome','Nome','required|is_unique[colecao.col_nome]');
		$this->form_validation->set_rules('descricao','Descricao','required');
		$this->form_validation->set_rules('senha','Senha');

		if($this->form_validation->run()){
			$dados['col_descricao'] = $this->input->post('descricao');
			$dados['col_nome'] = str_replace(' ', '_', $this->input->post('nome'));
			if($this->input->post('privada') == 'on'){
				$dados['col_senha'] =  md5($this->input->post('senha'));
			}

			$dados['sugestor_id'] = $this->session->userdata('id');
			$this->colemodel->inserir($dados);
			$aux = $this->colemodel->getColecao($dados['col_nome']);

			$newdata = array(
				'id' => $this->session->userdata('id'),
				'nome' => $this->session->userdata('nome'),
				'email' => $this->session->userdata('email'),
				'logado' => TRUE,
				'colecao' => $aux[0]['col_id']
			);

			$this->session->set_userdata($newdata);

			redirect(base_url('colecao/area_novos_atributos'));
		}
		else{
			echo "<script type='javascript'>alert('Falha!');";
		}
	}

	function area_novos_atributos(){
		$this->load->view('html-header');
		$this->load->view('usual/adicionar_atributos');
		$this->load->view('html-footer');
	}

	function listar_colecoes(){
		$dados['colecoes'] = $this->colemodel->listar_aprovadas();

		$this->load->view('html-header');
		$this->load->view('menu_home');
		$this->load->view('listar_colecoes',$dados);
		$this->load->view('model_inserir_senha_colecao');
		$this->load->view('html-footer');
	}
}

