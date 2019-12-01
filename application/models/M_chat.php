<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_chat extends CI_Model {

	function user_online(){
		return $this->db->get("online");
	}
}
