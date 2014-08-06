<?php

class sponseditmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->library('session');

		$this->load->model('sponsmodel');

	}

	public function getFields($companyid){
		// $query = "SELECT * from sponsdata sd 
		// JOIN sponscalling sc on sd.companyid=sc.companyid 
		// JOIN sponsproposal sp on sd.companyid=sp.companyid 
		// JOIN sponsaux sa on sd.companyid=sa.companyid 
		// WHERE sd.companyid='$companyid'";

		$query = "SELECT * from sponsdata
		natural join sponscalling
		natural join sponsproposal
		natural join sponsaux
		where companyid='$companyid'";

		$res = $this->db->query($query);

		$field_name = $res->list_fields();

		$values = $this->sponsmodel->getFullData($companyid);

		$values = $values['data']; // the returned value will be an array with the data index
									// containing all the values.

		// print_r($res->list_fields());

		return array('fieldData'=>$field_name,
			'fieldVal'=>$values);

	}

	public function updateRecord($input_data, $companyid){

		$fields = $input_data['fieldData'];

		// echo '<br/><br/>';
		// print_r($fields);

		// echo '<br/><br/>';

		// print_r($_POST);

		$query = "update sponsdata 
					natural join sponscalling
					natural join sponsproposal
					natural join sponsaux
					set ";

		$queryEnd = "where companyid='$companyid'";

		$fields = array_values($fields);

		for($i = 2; $i < count($fields); $i = $i + 1){
			$query = $query.' '.$fields[$i].'="'.$_POST[$fields[$i]].'"' ;

			if($i != count($fields) - 1)

				$query = $query.', ';
		}

		$query = $query.' '.$queryEnd;

		echo $query;

		if($res = $this->db->query($query))

			echo 'Query executed successfully.';

		else

			echo 'Query not executed successfully.';

		// $compname = $this->input->post('compname');
		// $desc = $this->input->post('desc');
		// $contactname = $this->input->post('contactname');
		// $contactdesig = $this->input->post('contactdesig');
		// $contphone = $this->input->post('contphone');
		// $contemailid = $this->input->post('contemailid');

		// $userid = $this->session->userdata('userid');

		// $query = "INSERT INTO sponsdata(touserid, name, description, contname, contdesig, contphone, contemailid) 
		// VALUES('$userid', '$compname', '$desc', '$contactname', '$contactdesig', '$contphone', '$contemailid');";

		// if($res = $this->db->query($query)){

		// 	echo 'Query executed successfully.';

		// 	// add empty rows in all the other tables

		// 	$res = $this->db->query("SELECT COUNT(*) FROM sponsdata");

		// 	$res = $res->result_array();
		// 	$res = $res[0];
		// 	$res = array_values($res);
		// 	// echo $res[0];
		// 	$count = $res[0];

		// 	// insert empty rows in all other tables with this count as the companyid

		// 	$query = "insert into sponscalling(companyid) values('$count')";
		// 	$res = $this->db->query($query);

		// 	$query = "insert into sponsaux(companyid) values('$count')";
		// 	$res = $this->db->query($query);

		// 	$query = "insert into sponsproposal(companyid) values('$count')";
		// 	$res = $this->db->query($query);

		// }

		// else

		// 	echo 'Query unsuccessful.';

		return;

	}

}

?>