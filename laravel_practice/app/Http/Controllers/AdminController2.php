<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Test_Model2; // This is the namespace we have given to use the mode Test_Model2......

class AdminController2 extends Controller
{
    public function dashboard()
    {

    }

    public function __construct()
    {
    	echo "I am the constructor method from AdminController2";
    }
}
