<?php
defined('BASEPATH') OR exit('No direct scirpt access allowed');

class Marcacao extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('marcacoes_model','marcmodel');
	}

	public function pegaMarcacoes(){
		$marcacoes['marcacoes'] = $this->marcmodel->get_Nome('marcacao_Bibliotecas');
		$this->load->view('pega_dados',$marcacoes);
	}

	public function marcacoes_privadas($col_id){
		$dados['colecao'] = $col_id;
		$this->load->view('model_inserir_senha_colecao',$dados);
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
			$this->load->view('menu_home');
			$this->load->view("mapa_marcacoes",array("marcacoes"=>$marcacoes));
			$this->load->view('script');
			$this->load->view('html-footer');
		}
	}

	public function exibir_marcacoes($col_id){
		$this->load->model('colecao_model','colmodel');
		$this->load->model('atributo_model','atrimodel');

		$nome_col = $this->colmodel->get_nome_colecao($col_id);
		$marcacoes['atributos'] = $this->atrimodel->listar($col_id);
		$marcacoes['valores'] = $this->marcmodel->get_Nome('marcacao_'.$nome_col[0]->col_nome);

		$this->load->view('html-header');
		$this->load->view('menu_home');
		$this->load->view("mapa_marcacoes",array("marcacoes"=>$marcacoes));
		$this->load->view('script');
		$this->load->view('html-footer');
	}
}