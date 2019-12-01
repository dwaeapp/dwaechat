<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function do_login($us,$pw){
		return $this->db->get_where("users",array("username" => $us, "password" => $pw));
	}
	function set_online($nk){
		return $this->db->insert("online",array("nickname" => $nk));
	}
	function set_offline($nk){
		return $this->db->delete("online",array("nickname" => $nk));
	}
	function cek($param,$value){
		return $this->db->get_where("users",array($param => $value));
	}
	function insert($data){
		return $this->db->insert("users",$data);
	}
}
