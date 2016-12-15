<?php
class retrievePatient_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	
	function get_user_data($username)
	{
		$condition = "email =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from("patient_db");
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1)
		{
			//echo $query->result_array()->toString;
			return $query->result_array();
			//return $query->row();
		}
		else
		{
			return false;
		}
	}
	
	
	
}
?>