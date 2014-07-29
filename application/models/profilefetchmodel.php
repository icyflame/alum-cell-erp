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

	public function updateSearch($alumid, $value){

		$query = "UPDATE status SET search='$value' WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

	}

	public function updateCalling($alumid, $value){

		$query = "UPDATE status SET called='$value' WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);
		
	}

	public function getSearch($alumid){

		$query = "SELECT search FROM status WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

		$res = $res->result_array();

		$res = $res[0]['search'];

		return $res;
		
	}

	public function getCalling($alumid){

		$query = "SELECT called FROM status WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

		$res = $res->result_array();

		$res = $res[0]['called'];

		return $res;
		
	}


}

?>