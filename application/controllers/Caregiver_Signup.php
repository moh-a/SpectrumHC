<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//session_start(); //we need to start session in order to access it through CI
class Caregiver_Signup extends CI_Controller {

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
	
	public function insertCaregiver()
	{
		
		$this->load->model('insertCaregiver_model');
		$data = array(
				'name' => $this->input->post('name'),
				'password' => $this->input->post('pass'),
				'telephone' => $this->input->post('Tphno'),
				'email' => $this->input->post('email'),
				'gender' => $this->input->post('gender'),
				'DOB' => $this->input->post('dob'),
				'preferredLanguage' => $this->input->post('language'),
				'address' => $this->input->post('add1'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'postalCode' => $this->input->post('postalcode'),
				'service[]' => $this->input->post('service'),
				'availability[]' => $this->input->post('availability'),
				//'role' => "Patient",
		);
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('pass', 'password', 'required|min_length[8]');
		$this->form_validation->set_rules('Tphno', 'Telephone', 'required|exact_length[10]');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('gender', 'gender', 'required');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
		$this->form_validation->set_rules('add1', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required|alpha');
		$this->form_validation->set_rules('state', 'state', 'required|alpha');
		$this->form_validation->set_rules('postalcode', 'Postal Code', 'required|alpha_dash');
		$this->form_validation->set_rules('service[]', 'Services', 'required|min_length[1]');
		$this->form_validation->set_rules('availability[]', 'availability', 'required|min_length[1]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('SignUp.php');
			// var_dump($data);
		}else
		{
			$result= $this->insertCaregiver_model->insert_caregiver($data);
			if($result==true)
			{
				$this->data['success_message'] = 'User Successfully Created';
				$this->load->view('login.php',	$this->data);


			}
			else
			{
				$this->data['err_message'] = 'Error ! User Already Exists';
				$this->load->view('SignUp.php',	$this->data);

			}

		}
	}

}
