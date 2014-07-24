<?php

class summarymember extends CI_Model{
	
	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getdata_allyears($year=''){

		if ($year == '')

			$yearFilter = '';

		else

			$yearFilter = "AND year='$year'";

		// a lot of count queries

		$u = $this->session->userdata['userid'];

		// all years

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' $yearFilter");

		$allocated = $this->getcount($res);

		// status table.

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND search='1' $yearFilter");

		$yet = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND search='2' $yearFilter");

		$notfound = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND search='3' $yearFilter");

		$found = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND search='4' $yearFilter");

		$ready = $this->getcount($res);

		// response table

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND called='1' $yearFilter");

		$called2way = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND called='2' $yearFilter");

		$negative = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND called='3' $yearFilter");

		$neutral = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND called='4' $yearFilter");

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