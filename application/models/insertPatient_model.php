<?php
class insertPatient_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function insert_Patient($data){
		$data2=array('username' => $data['email'],'password' =>$data['password'],'type' =>'Patient');
		$this->load->database();
		//first check whether the user already exist in the system.
		
		
		$condition = "username =" . "'" . $data['email']. "'";
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() == 0)
		{
			//user doesnot already exist in the database;
			$this->db->insert('patient_db', $data);
			$this->db->insert('login', $data2);
			return true;
			
		}
		else
		{
			
			//user already exist in the databse
			#echo "Opps! Wrong Id or Password";
			#var_dump("Opps! Not found in DB");
			return false;
		}
		
		
		
		
	}
}
?>