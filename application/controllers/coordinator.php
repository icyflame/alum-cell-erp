<?php

class coordinator extends CI_Controller{

	function __construct(){

		parent::__construct();

		$this->load->model('userdb');

		$this->load->library('session');

		$this->load->helper('url');
	}

	function index(){

		$users = $this->userdb->getallusers();

		var_dump($users);

		echo "This is the index function!";

	}

}


?>