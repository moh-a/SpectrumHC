<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
    } 
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function signup()
	{
		$this->load->view('signUp');
	}

	public function insertPatient()
	{
			$this->load->model('insertPatient_model');
		$data = array(
			'name' => $this->input->post('name'),
			'password' => $this->input->post('pass'),
			'telephone' => $this->input->post('Tphno'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('add1'),
			'gender' => $this->input->post('gender'),
			'country' => $this->input->post('ctry'),
			'city' => $this->input->post('city'),
			'role' => "Patient",
		);
		   $this->load->library('form_validation');
		   $this->form_validation->set_rules('name', 'name', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                        var_dump($data);
                }else{
                	$this->load->view('patient_View');	
	                $this->insertPatient_model->insert_Patient($data);
					
                }
	}
	
}
