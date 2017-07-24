

<?php
class User extends MY_Controller
{
	public function index()
	{	
		$this->load->helper('form');

		$this->load->model('articlesmodel','articles');


		$this->load->library('pagination');

		$config =[
		'base_url'   =>  base_url('user/index'),
		'per_page'   =>  5,
		'total_rows' =>  $this->articles->count_all_articles(),
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

		$articles = $this->articles->all_articles_list($config['per_page'], $this->uri->segment(3));

		$this->load->view('public/articles_list', compact('articles')); // This 'compact' method is of core php.

	}

	public function search()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('query', 'Query', 'required');

		if(!$this->form_validation->run())
		{
			return $this->index(); // This return is important here else the code will get executed further and will give error.  
		}

		$query = $this->input->post('query');

		return redirect("user/search_results/$query");

		// $this->load->model('articlesmodel','articles');
		// $articles = $this->articles->search($query);

		// $this->load->view('public/search_results', compact('articles'));

	}


	public function search_results($query)
	{

		$this->load->helper('form');

		$this->load->model('articlesmodel','articles');


		$this->load->library('pagination');

		$config =[
		'base_url'   =>  base_url("user/search_results/$query"),
		'per_page'   =>  5,
		'total_rows' =>  $this->articles->count_search_results($query),
		'full_tag_open' => "<ul class = 'pagination'>",
		'full_tag_close' => "</ul>",
		'first_tag_open' => "<li>",
		'uri_segment'   =>  4,         // we have to give the uri segment here bcoz by default it take 3 segment, for more we have to define here.
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

		$articles = $this->articles->search($query, $config['per_page'], $this->uri->segment(4));

		$this->load->view('public/search_results', compact('articles'));


	}

}
?>	 