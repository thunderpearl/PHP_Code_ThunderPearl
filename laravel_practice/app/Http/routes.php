<?php

// This code is for retrieving a view

// This will create basic url "localhost:8080/laravel_practice/public"
// view is in the resources folder "resources/views"
//Route::get('/',function(){

	//$data = ['Meliodas','Elizabeth','Merlyn','Gilthunder'];
	
	// return view::make('test-data');

	// return view('test-data', compact('data'));
	
	// return view('test-data')->with('names',$data); // $data is the array and "names" is with which name we wanna receive in test-data.blade.php

	// This compact is a php function for converting data into array.




//});

// This dashboard method will be called and constructor method will be called.
// This will give proof to the fact that framework will be creating the object somewhere for the  AdminController2 class.
Route::get('/','AdminController2@dashboard');

?>


