<?php
namespace App\Http\Controllers;
 
 /* We have to start the code right from the beginning means from line 1
 else we will get the error "Namespace declaration statement has to be very first statement in teh script" */

class AdminController extends Controller
{
	public function getDashboard()
	{
		echo "getDashboard method";
	}

	public function getAddUser()
	{

	}

	public function postAddUser()
	{

	}

	// This missingMethod() is for those methods which we have not defined then this will be called.
	
	public function missingMethod($params=[])
	{
		// This below is dump and die method.......
		dd($params);
	}

	// Models will be created inside the providers folder.
}
