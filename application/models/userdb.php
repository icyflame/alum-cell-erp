<?php

class userdb extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function checklogin(){

		$username = $this->input->post('username');
		$pwentered = $this->input->post('password');

		// $data = array(
		// 	'username'=>'icyflame',
		// 	'password'=>md5('somepass'),
		// 	'firstname'=>'siddharth',
		// 	'lastname'=>'kannan'
		// 	);

		// $this->db->insert('users', $data);

		$res = $this->db->query("SELECT password FROM users WHERE username='$username'");

		$pw = '';

		foreach($res->result() as $row){

			$pw = $row->password;

		}

		// try{

		// 	$pw = $row[0]['password'];

		// } catch (Exception $e){

		// 	echo 'Username or password incorrect. Try again.';

		// }

		echo 'Stored: '.$pw.'<br/>';
		echo 'Entered: '.md5($pwentered).'<br/>';

		if ($pw == ''){
			echo 'Username or password incorrect. Try again.';
		}

		return ($pw === md5($pwentered));

	}

	public function getdata(){

		$username = $this->input->post('username');
		$pwentered = $this->input->post('password');

		$res = $this->db->query("SELECT * FROM users WHERE username='$username'");

		$pw = '';

		foreach($res->result() as $row){

			$privi = $row->privilege;
			$un = $row->username;

		}

		return array('username' => $un,
			'privilege' => $privi
			);

	}

}

?>