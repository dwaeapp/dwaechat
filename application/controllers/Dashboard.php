<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('nickname')){
			redirect(base_url('welcome'));
		}
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('dashboard');
		$this->load->view('layout/footer');
	}
}
