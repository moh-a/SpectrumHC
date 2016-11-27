<?php
class user_authentication extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function dbCheck($data){
	$condition = "name =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
	$this->db->select('*');
	$this->db->from($data['role']."_db");	
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {
	return true;
	} else {
		var_dump("bk");	
	return false;
	}
	}
}
?>