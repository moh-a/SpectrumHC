<?php
class createRequest_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function createRequest($data)
	{
		
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
		
		//parse the times
		$TimePref1=$data['Time1H'].':'.$data['Time1M'];
		$TimePref2=$data['Time2H'].':'.$data['Time2M'];
		$TimePref3=$data['Time3H'].':'.$data['Time3M'];
		
		
		$data1 = array(
				'BloodTest' => $BloodT,
				'GlucoseTest' => $Glucose,
				'BloodPressure' => $BloodP,
				'UrineTest' => $Urine,
				'Physio' => $Physio,
				'Injection' => $Injection,
				'preferredGender' => $data['preferredGender'],
				'preferredLanguage' => $data['preferredLanguage'],
				'address' => $data['address'],
				'city' => $data['city'],
				'state' => $data['state'],  
				'postalCode' => $data['postalCode'],
				'date' => $data['date'],
				'TimePref1' => $TimePref1,
				'TimePref2' => $TimePref2,
				'TimePref3' => $TimePref3,
				'instruction' => $data['instruction'],
				'PatientID' => $data['patientID'],
				'careGiverID' => '',
				'status' => 'unallocated'
				
		);
		
		$this->load->database();
		$result= $this->db->insert('serviceRequest_db', $data1);
		
		if($result)
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
}
?>