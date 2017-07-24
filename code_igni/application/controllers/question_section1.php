
<?php

class Question_section1 extends MY_Controller
{
	public function index()
	{
		$this->load->helper('form');
		$this->load->view("questions/question1.php");
	}


	public function answer_submit()
	{
		$this->load->library('form_validation');
	} 


	public function answers()
	{
		$this->load->model('answer_match');
		$this->answer_match->matching();
	}
}

?>