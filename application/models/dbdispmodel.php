<?php

class dbdispmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getAllData(){

		echo "This is the DB Disp Model.";

		$res = $this->db->query("SELECT * FROM alumni");

		echo print_r($res);

		return $res;
	}
}

?>