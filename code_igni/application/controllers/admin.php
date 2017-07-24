

<?php
class Admin extends MY_Controller
{
	public function dashboard()
	{

				$this->load->library('pagination');

				$config =[
							'base_url'   =>  base_url('admin/dashboard'),
							'per_page'   =>  5,
							'total_rows' =>  $this->articles->num_rows(),
							'full_tag_open' => "<ul class = 'pagination'>",
							'full_tag_close' => "</ul>",
							'first_tag_open' => "<li>",
							'first_tag_close' => "</li>",
							'last_tag_open' => "<li>",
							'last_tag_close' => "</li>",
							'next_tag_open' => '<li>',
							'next_tag_close' => '</li>',
							'prev_tag_open' => '<li>',
							'prev_tag_close' => '</li>',
							'num_tag_open' => '<li>',
							'num_tag_close' => '</li>',
							'cur_tag_open' => "<li class = 'active'><a>",
							'cur_tag_close' => "</a></li>",  // This is the special case where we are giving </a> bcoz bootstrap designing is such.
						];

				$this->pagination->initialize($config);
				/*
				if(! $this->session->userdata('user_id')) // This condition is check condition which will show dashboard only if person is logged in else will redirect to login page.
					return redirect('login');
				*/

				// We are getting the articles and storing into $articles
				// Below we have our constructor and load the model in it with it's pseudo name.	

				// segment(3) is 3rd part inside url, 1st is controller, then method and it's segment(3) part.	
				$articles = $this->articles->articles_list( $config['per_page'], $this->uri->segment(3));   // If we have given the secondary name
				// then we need to use that seconary name here too.
				// In above line, we will get the titles/title which will get stored in $articles.

				//Those $articles will be passed in view and stored in 'articles' and will recieved in dashboard in form of $articles.
				$this->load->view('admin/dashboard',['articles'=>$articles]); // we are passing the received articles from article_list method in here.
				// The above 'articles' will be received by "dashboard.php" inside view in the form of "$articles".
	}


			public function add_article()
			{
		          // "form" helper is needed to use the "form_open" function in the view page.
				$this->load->view('admin/add_article');   // This is the add_article.php file under admin folder

			}


			public function store_article()
			{
		    	// Previously we use to form validate from the same file. But, now we have set the rules and all in config's form_validation file.
		    	// We just need to pass the rule in the run like below.
				$this->load->library('form_validation');
				if($this->form_validation->run('add_articles_rules'))///it is somehow falling into the else condition below
				{
		    		// If we pass the parameter inside post then we will get that value only else it will give all the inputs in the array.
					$post = $this->input->post();
		    		unset($post['submit']); // this is to remove submit value received in $post array else it will give error.

		    		return $this->_flashAndRedirect(
					    			$this->articles->add_article($post),
					    			"Article Added Successfully.",
					    			"Article Failed To Add, Please Try Again."
		    			);

		    	}

		    	else
		    	{
		    		$this->load->view('admin/add_article'); // here
		    	}
		    }


		    public function edit_article($article_id)
		    {
		    	// echo $article_id;  // This will echo the id of the article which we click to be edited.

		    	// We have loaded the model named 'articlesmodel' and 'articles' is alias name inside constructor below.
		    	$article = $this->articles->find_article($article_id);

		    	// We are receiving the $article in article
		    	$this->load->view('admin/edit_article',['article'=>$article]);
		    }


		    // This method is used when when are done with edit article then we will be using this method.
		    public function update_article($article_id)
		    {
		    	// exit($article_id); // this way we can check if we are getting $article_id or not ?
		    	// Previously we use to form validate from the same file. But, now we have set the rules and all in config's form_validation file.
		    	// We just need to pass the rule in the run like below.
		    	$this->load->library('form_validation');
				if($this->form_validation->run('add_articles_rules'))///it is somehow falling into the else condition below
				{
		    		// If we pass the parameter inside post then we will get that value only else it will give all the inputs in the array.
					$post = $this->input->post();
		    		unset($post['submit']); // this is to remove submit value received in $post array else it will give error.

		    		return $this->_flashAndRedirect(
					    			$this->articles->update_article($article_id, $post),
					    			"Article Updated Successfuly.",
					    			"Article Failed to Update, Please Try Again."
		    			);
		    	}

		    	else
		    	{
		    		$this->load->view('admin/edit_article'); // here
		    	}
		    }


		    public function delete_article()
		    {

		    	$article_id = $this->input->post('article_id');

		    	return $this->_flashAndRedirect(
					    		$this->articles->delete_article($article_id),
					    		"Article Deleted Successfully.",
					    		"Article Failed To Delete, Please Try Again."

		    		);
				/*
		    	if($this->articles->delete_article($article_id))
		    	{
		    		$this->session->set_flashdata('feedback','Article Deleted Successfuuly');
		    			// This above code will set the "flash data" if submission of the article gets successful and will be used in the view of dashboard.
		    		$this->session->set_flashdata('feedback_class','alert-success');
		    			// echo "Insert sucessful";
		    	}
		    	else
		    	{
		    		$this->session->set_flashdata('feedback','Article Failed To Delete, Please Try Again');
		    		$this->session->set_flashdata('feedback_class','alert-danger');
		    			// echo "Insert uncessful";
		    	}
		    	return redirect('admin/dashboard');  */
		    }


		    public function __construct()  // This constructor is created bcoz what if some user will try entering direct url for admin and execute the dashboard method. So, now when user will hit the admin/dashboard then it will redirect it to login page.
		    {
		    	parent::__construct(); // This is a very important class
		    	if(! $this->session->userdata('user_id'))
		    		return redirect('login');

		    	$this->load->model('articlesmodel','articles'); // This model was previously getting loaded above at many places but we have included it into constructor bcoz here it will automatically will get load.
		    	$this->load->helper('form');
		    }
		    	// Above constructor can be placed in MY_Controller but then we need to undo the "login extends My_Controller" or make it as
		    	// "login extends CI_Controller" as in this "admin" file we can have more methods.


		    private function _flashAndRedirect($successful, $successMessage, $failureMessage)
		    {
		    	if($successful)
		    	{
		    		$this->session->set_flashdata('feedback', $successMessage);
		    		$this->session->set_flashdata('feedback_class','alert-success');
		    	}
		    	else
		    	{
		    		$this->session->set_flashdata('feedback', $failureMessage);
		    		$this->session->set_flashdata('feedback_class','alert-danger');
		    	}
		    	return redirect('admin/dashboard');

			}
}

?>
