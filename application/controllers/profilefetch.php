<?php

class profilefetch extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->model('profilefetchmodel');

		$this->load->library('session');

		$this->load->helper('url');
	}

	public function index(){

		// probably have a check here for the privilege of the user
		// and then load the appropriate view.

		echo 'The index function has been called';
	}

	public function showprofile($alumid){

		$data = $this->profilefetchmodel->getData($alumid);

		// print_r($data);

		$this->load->view('templates/header.html');
		$this->load->view('profilefetchview', $data);
		$this->load->view('templates/footer.html');

	}

	public function updateSearch($alumid, $value){

		$this->profilefetchmodel->updateSearch($alumid, $value);

	}

	public function updateCalling($alumid, $value){

		$this->profilefetchmodel->updateCalling($alumid, $value);

	}

}

?>