<?php

class summarymember extends CI_Model{
	
	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getdata_allyears(){

		// a lot of count queries

		$u = $this->session->userdata['userid'];

		// all years

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u'");

		$allocated = $this->getcount($res);

		// status table.

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND search='1'");

		$yet = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND search='2'");

		$notfound = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND search='3'");

		$found = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND search='4'");

		$ready = $this->getcount($res);

		// response table

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND called='1'");

		$called2way = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND called='2'");

		$negative = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND called='3'");

		$neutral = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND called='4'");

		$positive = $this->getcount($res);

		// send the data to the view

		$result = array('totalallocated'=>$allocated,
			'yet'=>$yet,
			'notfound'=>$notfound,
			'found'=>$found,
			'ready'=>$ready,
			'called2way'=>$called2way,
			'negative'=>$negative,
			'neutral'=>$neutral,
			'positive'=>$positive
			);

		return $result;
	}

	public function getcount($res){

		$y = $res->result_array();

		// print_r($y[0]);

		foreach($y[0] as $count){

			return $count;

		}

	}
}

?>