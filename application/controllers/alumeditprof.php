<?php

class alumeditprof extends CI_Controller{

	public $cid;

	public function __construct(){

		parent::__construct();

		$this->load->helper('url');

		$this->load->library('session');

		$this->load->model('profilefetchmodel');

		$this->load->helper('form');

		$this->load->library('form_validation');

		$this->cid = 0;

	}

	public function index(){

		echo $this->load->view('templates/header.html', array(), TRUE);

		echo '<h2>You need to specify an Alumni ID.<br/></h2>';

		echo $this->load->view('templates/footer.html', array(), TRUE);


	}

	public function editnow($alumid){

		if($this->profilefetchmodel->checkallotment($alumid)){

			echo $this->load->view('templates/header.html', array(), TRUE);

			echo '<h2>This Alumni has not been allotted to you.<br/><h2>';

			$url = site_url('sponscont/');

			echo "<h4><a href='$url'>Go back to Summary Page</a><h4>";

			echo $this->load->view('templates/footer.html', array(), TRUE);

			die;
		}

		$this->session->set_userdata('temp_aid', $alumid); // additional userdata that will be temporarily
															// for this function. once used in the model, it will 
															// unset.

		$data = $this->profilefetchmodel->getDataForEdit($alumid);

		$final_data['data'] = $data;

		$this->load->view('templates/header.html');
		$this->load->view('profileview/alumprofedit.php', $final_data);
		$this->load->view('templates/footer.html');

	}

	public function editprofile(){

		// var_dump($_POST);

		$alum = $_POST['alumid'];

		if($this->profilefetchmodel->updateProfile()){

			redirect('profilefetch/showprofile/'.$alum.'/editsuccess', 'refresh');

		}

		else{

			redirect('profilefetch/showprofile/'.$alum.'/editfail', 'refresh');

		}

		return;

	}

}


?>