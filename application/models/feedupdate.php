<?php

class feedupdate extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->helper('url');

		$this->load->library('session');

	}

	public function updateFeed($alumid, $field, $earlier, $present){

		$userid = $this->session->userdata('userid');

		$username = $this->session->userdata('username');

		$value = $username.' changed the value of '.$field.' from '.$earlier.' to '.$present.' for Alumni ID '.$alumid;

		$query = "INSERT INTO `latestactivity`(`alumid`, `newsitem`) VALUES('$alumid', '$value')";

		if($res = $this->db->query($query))

			echo 'Query executed successfully.';

		else

			echo 'Query unsuccessful.';



	}
}

?>