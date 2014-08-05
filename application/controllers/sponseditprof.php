<?php

class sponseditprof extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->helper('url');

		$this->load->library('session');

		$this->load->model('sponseditmodel');

	}

	public function editprofile($companyid){

		$this->load->helper('form');
		$this->load->library('form_validation');

		// $this->form_validation->set_rules('compname', 'compname', 'required');
		// $this->form_validation->set_rules('desc', 'desc', 'required');
		// $this->form_validation->set_rules('contactname', 'contactname', 'required');
		// $this->form_validation->set_rules('contactdesig', 'contactdesig', 'required');
		// $this->form_validation->set_rules('contphone', 'contphone', 'required');
		// $this->form_validation->set_rules('contemailid', 'contemailid', 'required|valid_email');

		if ($this->form_validation->run() === FALSE)
		{
			// echo 'Form not yet validated successfully. Try Again.';

			$this->load->view('templates/headerspons.html');
			$this->load->view('sponsorship/editprof.php', $this->sponseditmodel->getFields($companyid));
			$this->load->view('templates/footer.html');

		}

		else{

			echo 'Thanks a lot! The form was successfully submitted. We will talk with the model now.<br/>';

			$this->sponseditmodel->updateRecord();
		}


	}	
}


?>