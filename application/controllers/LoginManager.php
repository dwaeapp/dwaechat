<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginManager extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_manager');
	}
	public function index(){

		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$proc = $this->m_manager->login($user,md5($pass));
		if($proc->num_rows() > 0){
			echo "ok";
		}else{
			echo "no";
		}
	}
	public function view(){
		$this->load->view('layout/header');
		$this->load->view('manager/login');
		$this->load->view('layout/footer');
	}
}
