<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send extends CI_Controller{
	public function __construct(){
		parent::__construct();

		$this->load->model('m_chat');

	}
	public function index(){
		$nickname = $this->session->userdata('nickname');
		$messages = $this->input->post('messages');
		if(!empty($nickname) && !empty($messages)){
			$message = strip_tags($messages);
			$send = $this->m_chat->send_messages($nickname,$message);
			if($send){
				print "terkirim";
			}else{
				print "gagal";
			}
		}else{
			print "The Message Can'ot By Empty";
		}
	}
}
