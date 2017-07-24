

<?php

class Loginmodel extends CI_Model
{
	public function login_valid($username, $password)
	{

		// $this->db->query('SELECT * FROM username where username=$username and password=$password;')  // we can do this that way also but we will use active records
		// $this->load->database();   // instead if loading database again and again we shall out it in autoload.
		// In new user guide active records are renamed as "Query Builder Classes"
		//$password = md5($password);
		// we have loaded the db via autoload else we wud have to use $this->load->database();

		// $q = $this->db->query('SELECT * FROM users where username=$username and password=$password);
		$q = $this->db->where(['uname'=>$username, 'pword'=> $password])
				->get('users');                // There are other ways of using active records as well.
				// This actually will give an array of the elements on the row .

		if($q->num_rows()) // This condition will come out to be true if we will get rows more than 0 though for
		// proper legitimate user, there shall be one row.
		{
			// $q->result(); // This will give an array of result.
			return $q->row()->id;      // Here this will give first row of the result and then it's id value.
			//return TRUE;
		}
		else{
			return FALSE;
		}
	}
}

?>
