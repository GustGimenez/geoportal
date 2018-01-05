<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Marcacoes_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_Nome($nome){
		return $this->db->get($nome)->result();
	}
}