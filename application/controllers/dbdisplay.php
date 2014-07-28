<?php

class dbdisplay extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model('dbdispmodel');

		$this->load->library('session');

		$this->load->helper('url');

	}

	public function index(){

		header('Refresh:2, url="dbdisplay/buildTable/0"');

		// $this->buildTable();

	}

	public function buildTable($year='0', $call=''){

		$data = array(
			'all'=>$this->dbdispmodel->getAllData($year, $call)
			);

		// print_r($data);

		$this->load->view('dbdisp/dbdispview', $data);

	}

}

?>