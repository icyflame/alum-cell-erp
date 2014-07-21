<?php

class userdb extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function checklogin(){

		$username = $this->input->post('username');
		$pwentered = $this->input->post('password');

		$data = array(
			'username'=>'icyflame',
			'password'=>md5('somepass'),
			'firstname'=>'siddharth',
			'lastname'=>'kannan'
			);

		$this->db->insert('users', $data);

		$res = $this->db->query("SELECT password FROM users WHERE username='$username'");

		$row = $res->result_array();

		$pw = $row[0]['password'];

		echo $pw.'<br/>';
		echo md5($pwentered).'<br/>';

		return ($pw === md5($pwentered));

	}

}

?>