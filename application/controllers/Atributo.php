<?php
defined('BASEPATH') OR exit('No direct scirpt access allowed');

class Atributo extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('atributo_model','atrimodel');
	}

	function adicionar_atributos(){
		$cont = 1;
		$max = (int)$this->input->post('contador');
		$dados['criador'] = $this->session->userdata('id');
		$dados['colecao'] = $this->session->userdata('colecao');
		
		$this->load->library('form_validation');

		for(; $cont <= $max; $cont++){
			$this->form_validation->set_rules('nome'.$cont, 'Nome', 'required');
			$this->form_validation->set_rules('tipo'.$cont, 'Tome', 'required');

			if($this->form_validation->run()){
				$dados['atri_nome'] = $this->input->post('nome'.$cont);
				$dados['atri_tamanho'] = $this->input->post('tamanho'.$cont);

				switch($this->input->post('tipo'.$cont)){
					case 'INT':
						$dados['atri_tipo'] = 0;
						break;

					case 'VARCHAR[ ]':
						$dados['atri_tipo'] = 1;
						break;

					case 'BOOLEAN':
						$dados['atri_tipo'] = 2;
						break;

					case 'FLOAT':
						$dados['atri_tipo'] = 3;
						break;

					case 'BLOB':
						$dados['atri_tipo'] = 4;
						break;
				}
				

				if($dados['atri_tamanho'] == ''){
					if($dados['atri_tipo'] == 'VARCHAR[ ]') return; //colocar uma página de erro
				}
				
				$this->atrimodel->inserir($dados);
			}
		}

		redirect(base_url('usual/logado'));
	}
}