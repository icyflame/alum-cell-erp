<?php

class dbdispmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getAllData($year='0', $call=''){

		$yearfilt = '';
		$tableadd = '';
		$statusfilt = '';

		// if ($year == '0' && $call != '')

		// 	$yearfilt = '';

		if ($year != '0')

			$yearfilt = "AND alumSince='$year'";

		if ($call != ''){

			$statusfilt = "AND s.search=$call";

		}

		$userIdLoggedIn = $this->session->userdata('userid');

		$query = "SELECT a.*, c.followup, c.lastdate 
					FROM alumni a, calling c, status s
					WHERE a.alumid = c.alumid AND a.alumid = s.alumid
					AND s.touserid = '$userIdLoggedIn' $yearfilt $statusfilt";

		echo $query;

		$res = $this->db->query($query);

		// $res_call = $this->db->query("SELECT * FROM calling");

		// $res_dates = $res_call->result_array();

		// $number = 1;

		// $final_data = array();

		// foreach($res->result_array() as $row){

		// 	$dates = array(
		// 		'followup'=>$res_dates[$number-1]['followup'],
		// 		'lastdate'=>$res_dates[$number-1]['lastdate']
		// 		);

		// 	$number = $number + 1;

		// 	// print_r($dates);

		// 	$row = array_merge($row, $dates);

		// 	array_push($final_data, $row);

		// 	// print_r($row);
		// 	// echo '<br/>';

		// }

		// return $final_data;

		return $res->result_array();
	}
}

?>