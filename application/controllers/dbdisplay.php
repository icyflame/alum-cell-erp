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

	public function buildTable($year='0', $call='0', $alias='1'){

		$dataDump = $this->dbdispmodel->getAllData($year, $call, $alias);

		$data = array(
			'all'=>$dataDump['res'],
			'count'=>count($dataDump['res']),
			);

		// print_r(array_merge($data, $dataDump['class']));

		$all_data_1 = array_merge($data, $dataDump['class']);
		$all_data = array_merge($all_data_1, array('current_year'=>$year));

		// print_r($data);


		$this->load->view('templates/header.html');
		$this->load->view('dbdisp/dbdispview', $all_data);
		$this->load->view('templates/footer.html');

	}

}

?>