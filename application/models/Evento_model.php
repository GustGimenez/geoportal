<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Evento_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	function listall(){
		return $this->db->get('evento')->result();
	}

	function adicionarEvento($data){

	    $this->db->insert('evento', $data);
	    return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;

	}

	public function registrarParticipante($data){

		$this->db->insert('participante',$data);
		return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;
	}

	public function excluirEvento($id_evento){
		$this->db->where('id_evento',$id_evento);
		return $this->db->delete('evento');
	}

	public function buscarEvento($id_evento){
		$this->db->where('id_evento',$id_evento);
		return $this->db->get('participante')->result();
	}

}