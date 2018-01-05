<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usual_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function inserir($dados){
		return $this->db->insert('usual',$dados);
	}

	public function logar($dados){
		$this->db->where($dados);
		return $this->db->get('usual')->result();
	}
}