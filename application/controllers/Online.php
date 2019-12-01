<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('m_chat');
	}
	public function index(){
		$online = $this->m_chat->user_online();
		echo '&nbsp;<b class="bg-info">&nbsp; List User Online &nbsp;</b><br/>';
		foreach($online->result() as $on){
			$waktu = substr($on->waktu,10);   
			$waktu = substr($waktu,0,strlen($waktu)-3);
			echo '&nbsp;<i class="fa fa-user"></i> <span class="text-info">'.$on->nickname.' </span> &nbsp; <i class="fa fa-clock-o"></i> <span class="text-primary"> '.$waktu.'&nbsp;</span><br/>';
		}
	}
}
