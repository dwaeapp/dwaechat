<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_manager extends CI_Model{

	function login($user,$pass){

		return $this->db->get_where("manager",array("username" => $user, "password" => $pass));
	}
}
