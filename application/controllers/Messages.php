<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('m_chat');
	}
	public function index(){
		$messages = $this->m_chat->get_messages();
		foreach($messages->result() as $msg){
			$text_ori = $msg->message;
			$symbols = array(
				"[kasmaran]",
				"[kedip]",
				"[ketawa]",
				"[marah]",
				"[melet]",
				"[nangis]",
				"[sakit]",
				"[bye]",
				"[maki-maki]",
				"[cmarah]",
				"[cmurung]",
				"[cnangis]", 
				"[csedih]",
				"[csenyum]",
				"[bonus]"
			);
			$icons = array(
				"<img src='./assets/emot/akasmaran.gif' title='handup'>",	
				"<img src='./assets/emot/akedip.gif' title='bingung'>", 
				"<img src='./assets/emot/aketawa.gif' title='capek'>", 
				"<img src='./assets/emot/amarah.gif' title='cemen'>", 
				"<img src='./assets/emot/amelet.gif' title='cool'>",
				"<img src='./assets/emot/anangis.gif' title='galau'>", 
				"<img src='./assets/emot/asakit.gif' title='hay'>",  
				"<img src='./assets/emot/bye.gif' title='kedip'>",  
				"<img src='./assets/emot/maki-maki.gif' title='kesetrum'>", 
				"<img src='./assets/emot/marah.gif' title='lol'>",  
				"<img src='./assets/emot/murung.gif' title='mewek'>",
				"<img src='./assets/emot/nangis.gif' title='nangis'>",
				"<img src='./assets/emot/sedih.gif' title='nyengir'>",
			      	"<img src='./assets/emot/smile.gif' title='psimis'>",
				"<img src='./assets/emot/emot/bonus.png' title='rokok'>"
			);

			$message = str_replace($symbols,$icons,$text_ori);
			echo "<p>&nbsp;<span class='text-info bg-secondary text-center'><i class='fa fa-user'></i> ".$msg->nickname." </span><small>&nbsp;".$message."</small> <small class='text-muted'>(".$msg->post_time.")</small></p>";
		}
	}
}
