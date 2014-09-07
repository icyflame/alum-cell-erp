<?php

class profilefetchmodel extends CI_Model{
	
	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->library('session');

	}

	public function getStatusData($alumid){

		$query = "SELECT * FROM alumni WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

		$data = $res->result_array();

		return $data[0];

	}

	public function getProfileData($alumid){

		$query = "SELECT a.*, afd.* FROM alumni a, alumnifulldata afd WHERE a.alumid = afd.alumid AND a.alumid='$alumid'";

		$query = "SELECT * from alumni
		natural join alumnifulldata
		where alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

		// $data = $res->result_array();

		// return $data[0];

		return $res;

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

	public function checkallotment($alumid){

		// returns false if the allotment is legal
		// returns true if the allotment is illegal

		$query = "SELECT touserid from status where alumid='$alumid'";

		$res = $this->db->query($query);

		$res = $res->result_array(); 

		return !($res[0]['touserid'] == $this->session->userdata('userid'));
	}

	public function getDataForEdit($alumid){

		$query = "SELECT a.*, afd.* FROM alumni a, alumnifulldata afd WHERE a.alumid = afd.alumid AND a.alumid='$alumid'";

		$query = "SELECT * from alumni
		natural join alumnifulldata
		where alumid='$alumid'";

		$res = $this->db->query($query);

		$field_name = $res->list_fields();

		$values = $this->getProfileData($alumid);

		$values = $values->result_array(); // the returned value will be an array with the data index
									// containing all the values.

		$values = $values[0];

		// print_r($res->list_fields());

		$send_data = array('fieldData'=>$field_name, 'fieldVal'=>$values);

		// var_dump($send_data);

		return $send_data;

	}

	public function updateProfile(){

		$query = "update alumni
		natural join alumnifulldata
		set ";

		$i = 0;

		foreach($_POST as $key => $value){

			if($key == 'alumid')

				continue;

			else{

				$query = $query."`$key`"." = "."'$value'";

			}

			if($i < count($_POST) - 2){

				$query = $query.", ";

			}

			$i = $i + 1;

		}

		$query = $query." where `alumid` = ".$_POST['alumid'];

		if($res = $this->db->query($query))
			
			return true;

		else
			
			return false;

	}

}

?>