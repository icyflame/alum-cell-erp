<?php

class sponsmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getDataHome(){

		$query = "SELECT sd.name, sd.description, sc.latestcalldate, sc.nextcalldate from sponsdata sd, sponscalling sc where sd.companyid=sc.companyid";

		$res = $this->db->query($query);

		$final_data = $res->result_array();

		print_r($final_data);

		return array('data'=>$final_data);
	}
}

?>