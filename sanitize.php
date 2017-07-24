

<html>
<head>
    <style>
table, th, td {
     border: 1px solid black;
     border-collapse: collapse;
}
th, td {
     padding: 5px;
}
</style>
</head>
<body>

<?php
	// Here we are using "filter_var()" which is used for validatae and sanitize both.
	// Here HTML part of the string will be removed.
	$str = "<h1>Hey! I am a string which is gonna be sanitize using filter</h1>";
	$newstr = filter_var($str, FILTER_SANITIZE_STRING);
	echo $newstr ;

?>

</body>
</html>
