<?php
class insertPatient_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function insert_Patient($data){
	// Inserting in Table(students) of Database(college)
		 $this->load->database();
		$this->db->insert('patient', $data);
	}
}
?>