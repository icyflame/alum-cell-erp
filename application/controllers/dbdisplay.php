<?php

class dbdisplay extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model('dbdispmodel');

	}

	public function index(){

		echo "This is the DB Display controller.";

		$this->buildTable();

	}

	public function buildTable(){

		$data = $this->dbdispmodel->getAllData();

		// print_r($data);

		$this->load->view('dbdisp/dbdispview', $data);

	}

}

?>