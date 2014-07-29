<?php

class profilefetchmodel extends CI_Model{
	
	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->library('session');

	}

	public function getData($alumid){

		$query = "SELECT * FROM alumni WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

		$data = $res->result_array();

		return $data[0];


	}
}

?>