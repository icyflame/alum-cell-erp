<?php

class sponseditprof extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->helper('url');

		$this->load->library('session');

		$this->load->model('sponseditmodel');

		$this->load->model('sponsmodel');

	}

	public function editprofile($companyid){

		if($this->sponsmodel->checkAllotment($companyid)){

			echo $this->load->view('templates/headerspons.html', array(), TRUE);

			echo '<h2>This Sponsor has not been allotted to you.<br/><h2>';

			$url = site_url('sponscont/');

			echo "<h4><a href='$url'>Go back to Summary Page</a><h4>";

			echo $this->load->view('templates/footer.html', array(), TRUE);

			die;
		}

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