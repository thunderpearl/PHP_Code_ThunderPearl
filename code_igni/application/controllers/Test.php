


<?php 
   class Test extends CI_Controller {
  
      public function index() { 
	  
		// This 'test' as argument in "view" method is the view file to be rendered.
        $this->load->view('test');   // This is how we load the "view".
      } 
	  
	  public function hello()
	  {
		  echo "Hello method is working";
		  
	  }
   } 
?>