

<?php
	$var1 = 34;

	echo ($var1)."<br>";
	print ($var1)."<br>";
	print_r($var1)."<br>";
	var_dump($var1);



$values = array(0, 0.0, false, '');

echo "<br><br>";
var_dump($values);

echo "<br>";

print_r ($values);


// ECHO...ECHO.......
/*
Outputs one or more strings separated by commas
No return value

e.g. echo "String 1", "String 2"
*/


// PRINT...PRINT........
/*
Outputs only a single string
Returns 1, so it can be used in an expression

e.g. print "Hello"

or, if ($expr && print "foo")
*/

?>