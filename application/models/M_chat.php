<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_chat extends CI_Model {

	function user_online(){
		$this->db->order_by('online_id','DESC');
		return $this->db->get("online");
	}
	function get_messages(){
		$this->db->order_by('msg_id');
		return $this->db->get("messages");
	}
}
