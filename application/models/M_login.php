<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function do_login($us,$pw){
		return $this->db->get_where("users",array("username" => $us, "password" => $pw));
	}
	function set_online($nk,$tm){
		return $this->db->insert("online",array("nickname" => $nk, "waktu" => $tm));
	}
	function set_offline($nk){
		return $this->db->delete("online",array("nickname" => $nk));
	}
}
