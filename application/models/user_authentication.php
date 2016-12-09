<?php
class user_authentication extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function dbCheck($data)
	{
		$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "' AND ". "type =" . "'" . $data['role'] . "'";
		$this->db->select('*');
		$this->db->from("login");	
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return true;
		} 
		else 
		{
			#echo "Opps! Wrong Id or Password";
			#var_dump("Opps! Not found in DB");	
			return false;
		}
	}
}
?>