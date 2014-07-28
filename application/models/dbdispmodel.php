<?php

class dbdispmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getAllData(){

		echo "<br/>This is the DB Disp Model<br/>";

		$res = $this->db->query("SELECT * FROM alumni");

		$res_call = $this->db->query("SELECT * FROM calling");

		$res_dates = $res_call->result_array();

		$number = 1;

		$final_data = array();

		foreach($res->result_array() as $row){

			$dates = array(
				'followup'=>$res_dates[$number-1]['followup'],
				'lastdate'=>$res_dates[$number-1]['lastdate']
				);

			$number = $number + 1;

			// print_r($dates);

			$row = array_merge($row, $dates);

			array_push($final_data, $row);

			// print_r($row);
			// echo '<br/>';

		}

		return $final_data;
	}
}

?>