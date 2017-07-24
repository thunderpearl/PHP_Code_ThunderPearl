

<?php
$greeting1 = "Hello! Admin";
$greeting2 = "Hello";
echo urlencode($greeting1)."<br>";
echo urlencode($greeting2)."<br>";

$encode1 = urlencode($greeting1);
$encode2 = urlencode($greeting2);

echo urldecode($encode1)."<br>";
echo urldecode($encode2)."<br>";
	
?>