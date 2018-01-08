<?php
defined('BASEPATH') OR exit('No direct scirpt access allowed');

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('html-header');
		$this->load->view('menu_home');
		$this->load->view('map');
		$this->load->view('script');
		$this->load->view('html-footer');
	}
}