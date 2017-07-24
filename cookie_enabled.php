<?php 
	$cookie_name = "sarah";
	$cookie_value = "leader";

	setcookie($cookie_name, $cookie_value, time() + 3600, "/");

	if (count($_COOKIE) > 0) {
	 	echo "Cookie is enabled";
	 } 

	 else{
	 	echo "Cookie is not enabled";
	 }

 ?>