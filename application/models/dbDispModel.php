<?php

class dbdispmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getAllData(){

		echo "This is the DB Disp Model.";

		$res = $this->db->get('calling');

		// foreach($res->result() as $row){
		// 	print_r($row);
		// 	echo '<br/>';
		// }

		return $res->result();
	}
}

?>