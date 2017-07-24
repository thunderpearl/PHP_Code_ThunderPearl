<?php 

$file_path = "C:\\xampp\\htdocs\\Webdesigntesting\\hello.txt";
$file = fopen($file_path, "r");

// Without while it will only print the forst line.
while (!feof($file)) {
	
	echo fgets($file) . "<br>";
}


fclose($file);

 ?>