<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index(){
		$user = trim($this->input->post('Ruser'));
		$pass = md5(trim($this->input->post('Rpass')));
		$nick = trim($this->input->post('Rnick'));
		$mail = trim($this->input->post('Rmail'));
		$cekuser = $this->m_login->cek("username",$user);
		$ceknick = $this->m_login->cek("nickname",$nick);
		$cekmail = $this->m_login->cek("email",$mail);
		if($cekuser->num_rows() > 0){
			echo "ada";
		}elseif($ceknick->num_rows() > 0){
			echo "ada";
		}elseif($cekmail->num_rows() > 0){
			echo "ada";
		}elseif(empty($user) || empty($pass) || empty($nick) || empty($mail)){
			echo "no";
		}else{
			$data = array(
				'username' => $user,
				'password' => $pass,
				'nickname' => $nick,
				'email' => $mail
			);
			$save = $this->m_login->insert($data);
			if($save){
				$this->session->set_userdata('nickname',$nick);
				$this->m_login->set_online($this->session->userdata('nickname'));
				echo "yes";
			}else{
				echo "no";
			}	
		}
	}
}
