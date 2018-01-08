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