<?php

class newsfeedcontroller extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->helper('url');

		$this->load->model('feedupdate');

	}

	public function shownewsfeed(){

		$data = $this->feedupdate->getData();

		$this->load->view('templates/header.html');
		$this->load->view('newsfeedview', $data);
		$this->load->view('templates/footer.html');
	}
}


?>