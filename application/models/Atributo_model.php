<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Atributo_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	
	public function inserir($dados){
		$this->db->insert('atributo',$dados);
	}

	public function listar($id_col){
		$this->db->where("colecao",$id_col);
		return $this->db->get('atributo')->result();
	}
}