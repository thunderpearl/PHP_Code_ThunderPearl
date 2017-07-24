<?php

class Login extends MY_Controller
{

	public function index()
	{
		if($this->session->userdata('user_id')) // This code here will check if user is already logged in or not
			return redirect('admin/dashboard'); // If it is then it will redirect directly to dashboard.
			// These above parameters are controller and its method.

			$this->load->helper('form');
		$this->load->view('public/admin_login');  // This is the public folder in which we have a view called
		// admin_login.
		// This view will be loaded and as we know that view is using "form_open" so "form" helper has to be loaded for that.
	}

	public function admin_login()  // This method will recieve the data from the admin_login.php form.
	{

		// This is the form validation library we are loading here which will be used in
		// validating the entities entered in form.
		$this->load->library('form_validation');

		// Now we will set rules
		// $this->form_validation->set_rules('username', 'User Name', 'required(alpha|trim');
		 // "username" is reference name here, "User Name" is that name which it will refer for
		 // displaying error and last paramenters are what is required.

		// $this->form_validation->set_rules('password', 'Password', 'required|alpha'); // This is for the password.
		// We can give all form validation rules in one single file that will be saved in config file.

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");  // This is used when
		// we want all the errors to be in red.

		if($this->form_validation->run('admin_login'))   // "admin_login" is the name of the rule to
		// validate the username and password which is been created inside form_validation.php file inside "config" folder.
		{
			// In core php we use to get the fields information using $_POST but this is a
			// framework and we will be using its own classes and methods.

			$username = $this->input->post('username');  // Here we are storing the input data into the $username and $password.
			$password = $this->input->post('password');     

			//echo "username: $username and password: $password";   // This messsage will come when successful login.
			//echo "<br>";
			//echo "Validation successful";

			$this->load->model('loginmodel');  // Everything before use has to be loaded into the Controller.

			$login_id = $this->loginmodel->login_valid($username, $password); // Here we will recieve the "id" from loginmodel which we are storing in $login_id.

			if($login_id)  // Here we cheking if we have recieved any id in $login_id or not ?
			{
				// Credential valid, login successful
				//echo "Username and Password matched, Login Successful";
	      	     // We are setting up the session here for the login.
				// We have already loaded the session library in autoload.php

				// we are setting user's unique id at session, means we are setting user_id value as $login_id
				$this->session->set_userdata('user_id', $login_id);  // in config file we have to give the encryption key.
				// It can be anything but hexadecimal is suggested and will be unique for an application.
				//echo $this->session->userdata('user_id'); // This is used to check what is the value of "user_id"
				// exit; and "user_id" is a varible where we stored the $login_id value.


				return redirect('admin/dashboard'); // Here "admin/dashboard"  are controller and its method.
				 // We shall not load the dashboard page here bcoz of security issue and logic issue.
				// Hence, we will seperately make the "admin" controller and "dashboard" method in it.
				// In bracket we again pass the controller and its method.
			}

			else
			{
				// Login Failed.
				//echo "Invalid Username or Password, Login Failed";
				// This "login_failed" flash data will be available in "admin_login" view.
				$this->session->set_flashdata('login_failed','Invalid username or password.'); // This is how
                // we set flash data which will be set once only but will be available to second
                // call of "login" controller.
				// This is also taking 2 parameters, one is key and other is message which we want to display.
				// That key can be anything and message is of our choice.

				return redirect('login'); // Again redirecting it to the login controller.
			}
		}

		else
		{
			$this->load->view('public/admin_login');  // Here when it will fail to validate then form will load again
			// echo "Validation Failed";

			// echo validation_errors();  // This will print all the errors.
		}


	}
	// This below method is gonna be for logout
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}

}

?>
