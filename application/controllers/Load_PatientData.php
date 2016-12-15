

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//session_start(); //we need to start session in order to access it through CI
class Load_PatientData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database(); // load database
		$this->load->model('retrievePatient_model'); // load model
	}
	public function index()
	{
			$username = $this->session->userdata['logged_in']['username'];
			$result = $this->retrievePatient_model->get_user_data($username);
		
			if($result==0)
			{
				echo 'No user Found';
			}
			else
			{
				$data['member'] = $result[0];
				//$data['user']=$result->name;
				//$this->load->view('header');
				$this->load->view("patient_View", $data);
			}
		
		
	}
}
