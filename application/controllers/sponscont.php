<?php

class sponscont extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->helper('url');

		$this->load->library('session');

		$this->load->model('sponsmodel');

	}

	public function index(){

		$this->showsponshome();
	}

	public function showsponshome(){

		$data = $this->sponsmodel->getDataHome();

		$this->load->view('templates/header.html');
		$this->load->view('sponsorship/sponshome.php', $data);
		$this->load->view('templates/footer.html');
	}

	public function addspons(){

		$this->load->helper('form');
		$this->load->library('form_validation');

		// $this->form_validation->set_rules('username', 'Username', 'required');
		// $this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			// echo 'Form not yet validated successfully. Try Again.';

			$this->load->view('sponsorship/addspons.html');

		}


	}

	
}


?>