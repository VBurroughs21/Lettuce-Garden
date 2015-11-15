<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }

	public function index()
	{
		$this->load->view('index');
	}

	public function sign_up()
	{
		$this->load->view('sign_up');
	}

	public function not_yet()
	{
		$this->load->view('not_yet');
	}

	public function joined()
	{
		$this->load->view('joined');

		$this->user->all($zipcode);
		//zipcode into session
	}

	public function thanks()
	{
		$this->load->view('thanks');
	}

	public function check()
	{
		$zipcode = $this->input->post('zipcode');
		$address = $this->input->post('address');

		$this->load->library("form_validation");
		$this->form_validation->set_rules("zipcode", "zipcode", 
			"trim|required|exact_length[5]|alpha_numeric");
		$this->form_validation->set_rules("address", "address", 
			"trim|required");

		if ($this->form_validation->run() === FALSE) 
		{
			$this->view_data['errors'] = validation_errors();
			$this->session->set_flashdata('check_error', $this->view_data['errors']);
			
			redirect("#home");
			
		} 
		else 
		{
			if($zipcode === "78703") {
				$this->session->set_flashdata('address', $address);
				$this->session->set_flashdata('zipcode', $zipcode);
				$this->session->set_flashdata('available', "Congrats, Lettuce is available in your neighborhood!");

				redirect('/main/sign_up');
				//78703 zipcode page
			}
			else {
				$sub_info = array(
					'address' => $address,
					'zipcode' => $zipcode
				);
			
			$this->user->sub($sub_info);
				redirect('/main/not_yet');
				//not in your area page
			}
		}
	}

	public function create() 
	{
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$address = $this->input->post('address');
		$zipcode = $this->input->post('zipcode');
		$email = $this->input->post('email');


		$this->load->library("form_validation");
		
		$this->form_validation->set_rules(
			"first_name", "First Name", "trim|required");
		$this->form_validation->set_rules(
			"last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules(
			"address", "Address", "trim|required");
		$this->form_validation->set_rules(
			"zipcode", "Zipcode", "trim|required");
		$this->form_validation->set_rules(
			"email", "Email Address", "trim|required|valid_email");
		
		if ($this->form_validation->run() === FALSE) 
		{
			$this->view_data['errors'] = validation_errors();
			$this->session->set_flashdata('reg_error', $this->view_data['errors']);
				redirect(base_url('/main/sign_up'));		
		} 
		else 
		{

			$user_info = array(
				
				'first_name' => $first_name,
				'last_name' => $last_name,
				'address' => $address,
				'zipcode' => $zipcode,
				'email' => $email,
			);
			
			$this->user->create($user_info); 
			//zipcode into session

			redirect(base_url('/main/joined'));
		}
	}

	public function email()
	{
		$email = $this->input->post('email');

		$this->load->library("form_validation");
		$this->form_validation->set_rules(
			"email", "Email Address", "trim|required|valid_email");

		if ($this->form_validation->run() === FALSE) 
		{
			$this->view_data['errors'] = validation_errors();
			$this->session->set_flashdata('email', $this->view_data['errors']);
				redirect(base_url('/main/not_yet'));		
		} 
		else 
		{	
			$this->user->email_list($email); 

			redirect(base_url('/main/thanks'));
		}
	}
}

//end of main controller