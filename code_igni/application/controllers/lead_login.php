

<?php

// This is the lead_login controller for the lead generation
class Lead_login extends My_Controller
{
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('public/lead_admin_login.php');
	}

	public function register()
	{

		$this->load->helper('form');
		$this->load->view('public/lead_register.php'); // This form is for a new user for the registeration.
	}


	public function user_registration()
	{
			// here we will validate and gather the data entered by user

	}


}

?>
