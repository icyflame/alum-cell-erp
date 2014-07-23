<?php

class summarymember extends CI_Model{
	
	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getdata(){

		// a lot of count queries

		$u = $this->session->userdata['userid'];

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u');

		$result = array();

		return $result;
	}
}

?>