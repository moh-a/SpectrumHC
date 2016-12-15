<?php
class insertCaregiver_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	
	function insert_caregiver($data)
	{
		
		$data1 = array(
				'name' => $data['name'],
				'password' => $data['password'],
				'telephone' => $data['telephone'],
				'email' => $data['email'],
				'gender' => $data['gender'],
				'DOB' => $data['DOB'],
				'preferredLanguage' => $data['preferredLanguage'],
				'address' => $data['address'],
				'city' =>$data['city'],
				'state' => $data['state'],
				'postalCode' => $data['postalCode'],	
		);
		
		$data2=array('username' => $data['email'],'password' =>$data['password'],'type' =>'Caregiver');
		
		//check the service offered
		$BloodT;
		$Glucose;
		$BloodP;
		$Urine;
	    $Physio;
		$Injection;
		
		if (in_array("BloodT", $data['service[]'])){$BloodT =true;} else{$BloodT =false;}
		if (in_array("Glucose", $data['service[]'])){$Glucose =true;} else{$Glucose=false;}
		if (in_array("BloodP", $data['service[]'])){$BloodP =true;} else{$BloodP =false;}
		if (in_array("Urine", $data['service[]'])){$Urine =true;} else{$Urine =false;}
		if (in_array("Physio", $data['service[]'])){$Physio =true;} else{$Physio  =false;}
		if (in_array("Injection", $data['service[]'])){$Injection =true;} else{$Injection =false;}
		
		$data3 =array('email' => $data['email'],'BloodTest' =>$BloodT,'GlucoseTest' =>$Glucose 
				      ,'BloodPressure' =>$BloodP ,'UrineTest' =>$Urine ,'Physio' =>$Physio,'Injection' =>$Injection);
		
		
		//check weekly availability
		
		
		//check the service offered
		$Monday;
		$Tuesday;
		$Wednesday;
		$Thrusday;
		$Friday;
		$Saturday;
		$Sunday;
		
		if (in_array("Monday", $data['availability[]'])){$Monday =true;} else{$Monday =false;}
		if (in_array("Tuesday", $data['availability[]'])){$Tuesday =true;} else{$Tuesday=false;}
		if (in_array("Wednesday", $data['availability[]'])){$Wednesday =true;} else{$Wednesday =false;}
		if (in_array("Thrusday", $data['availability[]'])){$Thrusday =true;} else{$Thrusday =false;}
		if (in_array("Friday", $data['availability[]'])){$Friday =true;} else{$Friday  =false;}
		if (in_array("Sturday", $data['availability[]'])){$Saturday =true;} else{$Saturday =false;}
		if (in_array("Sunday", $data['availability[]'])){$Sunday =true;} else{$Sunday =false;}
		
		$data4 =array('email' => $data['email'],'Monday' =>$Monday,'Tuesday' =>$Tuesday
				,'Wednesday' =>$Wednesday ,'Thrusday' =>$Thrusday ,'Friday' =>$Friday,'Saturday' =>$Saturday,'Sunday' =>$Sunday);
		
		
		//check weekly availability
		
		
		
		
		
		
		
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
			$this->db->trans_start();
			//user doesnot already exist in the database;
			$this->db->insert('caregiver_db', $data1);
			$this->db->insert('login', $data2);
			$this->db->insert('caregiver_services_db', $data3);
			$this->db->insert('caregiver_availability_db', $data4);
			$this->db->trans_complete();
			return true;
				
		}
		else
		{
				
			//user already exist in the databse
			#echo "Opps! Wrong Id or Password";
			#var_dump("Opps! Not found in DB");
			return false;
		}
		
		//var_dump($data);
	}
}
?>