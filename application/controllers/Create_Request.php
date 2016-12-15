<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//session_start(); //we need to start session in order to access it through CI
class Create_Request extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		//var_dump($this->input->post('service'));
		//$this->load->view('login');
		//$this->load->view('welcome_message');
	}

	public function createNewRequest()
	{
		
		$this->load->model('createRequest_model');
		$data = array(
				'service[]' => $this->input->post('service'),
				'preferredGender' => $this->input->post('gender'),
				'preferredLanguage' => $this->input->post('language'),
				'address' => $this->input->post('add1'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'postalCode' => $this->input->post('postalcode'),
				'date' => $this->input->post('date'),
				'Time1H' => $this->input->post('Time1H'),
				'Time1M' => $this->input->post('Time1M'),
				'Time2H' => $this->input->post('Time2H'),
				'Time2M' => $this->input->post('Time2M'),
				'Time3H' => $this->input->post('Time3H'),
				'Time3M' => $this->input->post('Time3M'),
				'instruction' => $this->input->post('notes'),
				'patientID' =>  $this->session->userdata['logged_in']['username']
		);
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('service[]', 'Services', 'required|min_length[1]');
		//$this->form_validation->set_rules('preferredGender', 'preferred gender', 'required');
		//$this->form_validation->set_rules('preferredLanguage', 'preferred language', 'required');
		$this->form_validation->set_rules('add1', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required|alpha');
		$this->form_validation->set_rules('state', 'state', 'required|alpha');
		$this->form_validation->set_rules('postalcode', 'Postal Code', 'required|alpha_dash');
		$this->form_validation->set_rules('date', 'date', 'required');
		$this->form_validation->set_rules('Time1H', 'Time1H', 'required');
		$this->form_validation->set_rules('Time1M', 'Time1M', 'required');
		$this->form_validation->set_rules('Time2H', 'Time2H', 'required');
		$this->form_validation->set_rules('Time2M', 'Time2M', 'required');
		$this->form_validation->set_rules('Time3H', 'Time3H', 'required');
		$this->form_validation->set_rules('Time3M', 'Time3M', 'required');
		//$this->form_validation->set_rules('instruction', 'Instructions', 'required');
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('patient_View');
			var_dump($data);
		}
		else
		{
			//var_dump($data);
			$result= $this->createRequest_model->createRequest($data);
			if($result==true)
			{
				$this->data['err_message'] = 'Service Request Created successfully';
				$this->load->view('patient_View.php',	$this->data);
			
			
			}
			else
			{
				$this->data['err_message'] = 'Error ! Unable to create service request';
				$this->load->view('patient_View.php',	$this->data);
			
			}
			
			
			
			
			
		}
	
	}
}
