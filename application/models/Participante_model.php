<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Participante_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	function logar($dados){
		$this->db->where($dados);
		return $this->db->get('participante')->result();
	}
}