<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//session_start(); //we need to start session in order to access it through CI
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     

        $this->load->model('user_authentication');
    } 
	public function index()
	{
		$this->load->view('login');
		//$this->load->view('welcome_message');
	}
/* 
	public function login()
	{
		$this->load->view('login');
	}
 */
	public function signup()
	{
		$this->load->view('signUp');
	}

	public function roleSelection()
	{
		$this->load->view('roleSelection');
	}

	public function insertPatient()
	{
			$this->load->model('insertPatient_model');
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
	       
	        if ($this->form_validation->run() == FALSE)
	        {
	        	$this->load->view('SignUp.php');
	               // var_dump($data);
	        }else{
	           $result= $this->insertPatient_model->insert_Patient($data);
	            if($result==true)
	            {
	            	$this->data['success_message'] = 'User Successfully Created';
	            	$this->load->view('login.php',	$this->data);
	            	
	            
	            	//$this->load->view('login.php');
	            	
	              //$this->load->view('login');
		          //  $this->load->view('insert_Success');	
	            	
	            }
	           else
	           {
	           	$this->data['err_message'] = 'Error ! User Already Exists';
	           	$this->load->view('SignUp.php',	$this->data);
	           
	           }
				
	        }
	}

	public function validateUser()
	{
		$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'role' => $this->input->post('role'),				
			);
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	    if ($this->form_validation->run() == FALSE)
        {
        	$this->load->view('login.php');
        }else{
  
        	$result = $this->user_authentication->dbCheck($data);
        	if($result==true)
        	{
	        	
        		$session_data = array('username' => $data['username']);
        		$this->session->set_userdata('logged_in', $session_data);
        		
        		
        		if($data['role'] == "Patient"){
						$this->load->view('patient_View.php');
	        	}elseif ($data['role'] == "Caregiver") {
	        			$this->load->view('CareGiver_View.php');
	        	}elseif ($data['role'] == "Admin"){
	        		$this->load->view('Admin_View.php');
	        	}
        		
        	}
        	else
        	{
        		echo "Opps! Wrong Id OR Password OR Role";
        		$this->load->view('login.php');
        	}
        	
        }
	}

	public function role()
	{
		$roleName = $this->input->post('roleName');
		var_dump("temp");
		var_dump($roleName);
		if($roleName == "Patient"){
				   $this->load->view('signUp.php');
		}else{
 			var_dump($roleName);
		}
	}
	
}
