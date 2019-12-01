<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('nickname') || $this->input->cookie('nickname')){
			redirect(base_url('dashboard'));
		}
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('welcome');
		$this->load->view('layout/footer');
	}
}
