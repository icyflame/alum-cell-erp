<?php

class coordinator extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model('userdb');

		$this->load->library('session');

		$this->load->helper('url');
	}

	public function index(){

		$users = $this->userdb->getallusers();

		// var_dump($users);

		// echo "This is the index function!";

		$final_data = array('users'=>$users);

		$this->load->view('templates/header.html');
		$this->load->view('coordinator/mainview.php', $final_data);
		$this->load->view('templates/footer.html');

	}

	private function setalias($memberid){

		if($this->session->userdata('privilege') == COORDINATOR){

			// echo 'You are a coordinator.';

			if($this->userdb->getprivilege($memberid) == MEMBER){

				$this->session->set_userdata('aliasuserid', "$memberid");

				// echo 'Alias has been set.';

				redirect('dbdisplay/buildTable/0/0', 'refresh');
			}

			else{

				if($this->session->userdata('userid') == $memberid){

					$this->session->set_userdata('aliasuserid', "$memberid");

				}

				else{
					echo '<h3>You can alias to a student member only.</h3>';
				}
			}
		}

		else{
			echo '<h3>You are not a coordinator.</h3>';
		}
		

	}

	public function viewalias($memberid){

		// echo $memberid;

		// echo 'In the set alias function!';

		$this->setalias($memberid);

	}

}


?>