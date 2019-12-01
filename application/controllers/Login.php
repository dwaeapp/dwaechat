<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index(){

		$username = trim($this->input->post('user'));
		$password = md5(trim($this->input->post('pass')));
		$trylogin = $this->m_login->do_login($username,$password);
		if($trylogin->num_rows() == 0){
			echo "failed";
		}else{
			foreach($trylogin->result() as $row){
				$userdata = array(
					"nickname" => $row->nickname
				);
			}
			$this->session->set_userdata($userdata);
			$time = date("h:m:s");
			$online = $this->m_login->set_online($this->session->userdata('nickname'),$time);
			echo "ok";

		}
	}
	
	function logout(){
		$this->m_login->set_offline($this->session->userdata('nickname'));
		$this->session->sess_destroy();
		redirect(base_url('welcome'));
	}
}
