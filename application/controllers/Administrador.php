<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('administrador_model','modeladm');
	}

	function novo_adm(){
		$this->load->view('html-header');
		$this->load->view('menu_home');
		$this->load->view('administrador/cadastro_adm');
		$this->load->view('html-footer');
	}

	function cadastrar(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nome','Nome','required');
		$this->form_validation->set_rules('senha','Senha','required');
		$this->form_validation->set_rules('email','E-mail',
			'required|valid_email|is_unique[administrador.adm_email]');

		if($this->input->post('checkbox') != 'on'){
			$this->session->set_flashdata('fracasso',"Concorde com os termos!");
			redirect(base_url('administrador/novo_adm'));
		}

		if($this->form_validation->run()){
			$dados['adm_email'] = $this->input->post('email');
			$dados['adm_senha'] = md5($this->input->post('senha'));
			$dados['adm_nome'] = $this->input->post('nome');
			
			if($this->modeladm->inserir($dados))
				$this->session->set_flashdata('sucesso',"Administrador cadastrado!");
			else
				$this->session->set_flashdata('fracasso',"Erro ao cadastrar!");
			
		}
		else
			$this->session->set_flashdata('fracasso',"Erro ao cadastrar!");
		redirect(base_url('administrador/novo_adm'));
	}

	function login_area(){
		$this->load->view('html-header');
		$this->load->view('menu_home');
		$this->load->view('administrador/logar_adm');
		$this->load->view('html-footer');
	}

	function logar(){
		$dados['adm_email'] = $this->input->post('email');
		$dados['adm_senha'] = md5($this->input->post('senha'));

		$result = $this->modeladm->logar($dados);
		if(count($result) == 0){
			$this->session->set_flashdata('fracasso',"Erro no login!");
			redirect(base_url('administrador/login_area'));
		}
		else{
			$newdata = array(
				'nome' => $result[0]->adm_nome,
				'email' => $result[0]->adm_email,
				'logado' => TRUE
			);

			$this->session->set_userdata($newdata);
			redirect(base_url('administrador/logado'));
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
		$this->load->view('administrador/menu_adm');
		$this->load->view('map');
		$this->load->view('script');
		$this->load->view('html-footer');
	}	

	function listar_avaliacao(){
		$this->load->model('colecao_model','colemodel');
		$dados['colecoes'] = $this->colemodel->listar_nao_aprovadas();

		$this->load->view('html-header');
		$this->load->view('administrador/menu_adm');
		$this->load->view('administrador/listar_colecoes',$dados);
		$this->load->view('html-footer');
	}

	function avaliar_colecao($col_id){
		$this->load->model('atributo_model','atrimodel');
		$dados['atributos'] = $this->atrimodel->listar($col_id);

		$newdata = array(
			'nome' => $this->session->userdata('nome'),
			'email' => $this->session->userdata('email'),
			'logado' => TRUE,
			'colecao' => $col_id
		);
		$this->session->set_userdata($newdata);

		$this->load->view('html-header');
		$this->load->view('administrador/menu_adm');
		$this->load->view('administrador/avaliar_colecao',$dados);
		$this->load->view('html-footer');
	}

	function aprovar_colecao(){
		$this->load->model('colecao_model','colemodel');
		$resultado = array('col_aprovada' => TRUE);

		$this->colemodel->alterar_aprovacao($resultado,$this->session->userdata('colecao'));
		redirect(base_url('administrador/logado'));
	}

	function invalidar_colecao(){
		$this->load->model('colecao_model','colemodel');
		$resultado = array('col_aprovada' => FALSE);

		$this->colemodel->alterar_aprovacao($resultado,$this->session->userdata('colecao'));
	}

	function listar_colecoes(){
		$this->load->model('colecao_model','modelcol');
		$dados['colecoes'] = $this->modelcol->listar_aprovadas();

		$this->load->view('html-header');
		$this->load->view('administrador/menu_adm');
		$this->load->view('administrador/visualizar_colecoes',$dados);
		$this->load->view('html-footer');
	}

	public function exibir_marcacoes($col_id){
		$this->load->model('colecao_model','colmodel');
		$this->load->model('atributo_model','atrimodel');
		$this->load->model('marcacoes_model','marcmodel');

		$nome_col = $this->colmodel->get_nome_colecao($col_id);
		$marcacoes['atributos'] = $this->atrimodel->listar($col_id);
		$marcacoes['valores'] = $this->marcmodel->get_Nome('marcacao_'.$nome_col[0]->col_nome);

		$this->load->view('html-header');
		$this->load->view('administrador/menu_adm');
		$this->load->view("mapa_marcacoes",array("marcacoes"=>$marcacoes));
		$this->load->view('script');
		$this->load->view('html-footer');
	}

	public function marcacoes_privadas($col_id){
		$dados['colecao'] = $col_id;
		$this->load->view('administrador/model_inserir_senha_colecao',$dados);
	}

	public function exibir_marcacoes_privadas(){
		$this->load->model('colecao_model','colmodel');
		$this->load->model('atributo_model','atrimodel');
		$this->load->model('marcacoes_model','marcmodel');

		$colecao = $this->colmodel->select($this->input->post('colecao'));
		$marcacoes['atributos'] = $this->atrimodel->listar(($this->input->post('colecao')));
		$marcacoes['valores'] = $this->marcmodel->get_Nome('marcacao_'.$colecao[0]->col_nome);
		$senha = md5($this->input->post('senha'));

		if($senha == $colecao[0]->col_senha){
			$this->load->view('html-header');
			$this->load->view('administrador/menu_adm');
			$this->load->view("mapa_marcacoes",array("marcacoes"=>$marcacoes));
			$this->load->view('script');
			$this->load->view('html-footer');
		}
	}
}