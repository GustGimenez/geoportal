<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Colecao_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function inserir($dados){
		$this->db->insert('colecao',$dados);
	}

	public function select($id){
		$this->db->where("col_id",$id);
		return $this->db->get('colecao')->result();
	}

	public function getColecao($nome){
		$this->db->where("col_nome",$nome);
		return $this->db->get('colecao')->result_array();
	}

	public function listar_nao_aprovadas(){
		$this->db->where("col_aprovada",FALSE);
		return $this->db->get('colecao')->result();
	}

	public function listar_aprovadas(){
		$this->db->where("col_aprovada",TRUE);
		return $this->db->get('colecao')->result();
	}

	public function alterar_aprovacao($resultado, $col_id){
		$this->db->where('col_id',$col_id);
		$this->db->update('colecao',$resultado);
	}

	public function get_nome_colecao($col_id){
		$this->db->where('col_id',$col_id);
		$this->db->select('col_nome');
		return $this->db->get('colecao')->result();
	}
}