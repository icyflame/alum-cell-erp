<?php

class auth extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->model('userdb');

	}

	public function index(){
		$this->load->view('viewstat');
	}

	public function loginval()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Login Page';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			echo 'Form not yet validated successfully. Try Again.';
			
			$this->load->view('login');
			
		}
		else
		{

			$data['status'] = 'Not logged in.';

			$res = $this->userdb->checklogin();

			if($res){

				$data['status'] = 'Logged in successfully';

			}

			$this->load->view('viewstat', $data);
			
		}
	}
}


?>