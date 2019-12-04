<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect(base_url('loginmanager/view'));
		}
	}
	public function index(){

		echo "Hello Pak Manager";
	}
}
