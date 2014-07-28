<?php

class dbdispmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getAllData(){

		echo "<br/>This is the DB Disp Model<br/>";

		$res = $this->db->query("SELECT * FROM alumni");

		foreach($res->result() as $row){

			print_r($row);
			echo '<br/>';

		}

		return $res;
	}
}

?>