<?php 

$file_path = "C:\\xampp\\htdocs\\Webdesigntesting\\hello.txt";
$file = fopen($file_path, "r");

	// second parameter defines the number of bytes to read.	
	echo fgets($file,100) . "<br>";

fclose($file);

 ?>