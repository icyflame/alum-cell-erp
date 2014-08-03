<?php

class sponsmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->library('session');

	}

	public function getDataHome(){

		$userid = $this->session->userdata('userid');

		$query = "SELECT sd.name, sd.description, sc.latestcalldate, sc.nextcalldate
				 from sponsdata sd, sponscalling sc 
				 where sd.companyid=sc.companyid and sd.touserid='$userid'";

		// echo $query;

		$res = $this->db->query($query);

		$final_data = $res->result_array();

		// print_r($final_data);

		return array('data'=>$final_data);
	}

	public function addRecord(){

		$compname = $this->input->post('compname');
		$desc = $this->input->post('desc');
		$contactname = $this->input->post('contactname');
		$contactdesig = $this->input->post('contactdesig');
		$contphone = $this->input->post('contphone');
		$contemailid = $this->input->post('contemailid');

		$userid = $this->session->userdata('userid');

		$query = "INSERT INTO sponsdata(touserid, name, description, contname, contdesig, contphone, contemailid) 
		VALUES('$userid', '$compname', '$desc', '$contactname', '$contactdesig', '$contphone', '$contemailid');";

		if($res = $this->db->query($query)){

			echo 'Query executed successfully.';

			// add empty rows in all the other tables

			$res = $this->db->query("SELECT COUNT(*) FROM sponsdata");

			$res = $res->result_array();
			$res = $res[0];
			$res = array_values($res);
			// echo $res[0];
			$count = $res[0];

			// insert empty rows in all other tables with this count as the companyid

			$query = "insert into sponscalling(companyid) values('$count')";
			$res = $this->db->query($query);

			$query = "insert into sponsaux(companyid) values('$count')";
			$res = $this->db->query($query);

			$query = "insert into sponsproposal(companyid) values('$count')";
			$res = $this->db->query($query);

		}

		else

			echo 'Query unsuccessful.';



	}
}

?>