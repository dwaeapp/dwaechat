<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_chat');
		if(!$this->session->userdata('nickname')){
			redirect(base_url('welcome'));
		}
	}

	public function index(){
		$data['online'] = $this->m_chat->user_online();
		$this->load->view('layout/header');
		$this->load->view('dashboard',$data);
		$this->load->view('layout/footer');
	}
}
