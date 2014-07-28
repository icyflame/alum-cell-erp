<?php

class dbdisplay extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model('dbdispmodel');

	}

	public function index(){

		$this->buildTable();

	}

	public function buildTable($year='', $call=''){

		$data = array(
			'all'=>$this->dbdispmodel->getAllData($year, $call)
			);

		// print_r($data);

		$this->load->view('dbdisp/dbdispview', $data);

	}

}

?>