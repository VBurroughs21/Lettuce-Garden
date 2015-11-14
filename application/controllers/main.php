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

	public function congrat()
	{
		$this->load->view('congrats');
	}

	public function check()
	{
		$zipcode = $this->input->post('zipcode');

		$this->load->library("form_validation");
		$this->form_validation->set_rules("zipcode", "zipcode", 
			"trim|required|exact_length[5]|alpha_numeric");
		$this->form_validation->set_rules("address", "address", 
			"trim|required");

		if ($this->form_validation->run() === FALSE) 
		{
			$this->view_data['errors'] = validation_errors();
			$this->session->set_flashdata('check_error', $this->view_data['errors']);
			
			redirect("#check");
			
		} 
		else 
		{
			if($zipcode === "78703") {
				redirect("congrat");
				//78703 zipcode page
			}
			else {
				redirect("");
				//not in your area page
			}
		}
	}
}

//end of main controller