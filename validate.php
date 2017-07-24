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
	$num = 1000;
	if(!filter_var($num, FILTER_VALIDATE_INT) === false)
	{
	echo "Validation successful"; 
	}
	
	else
	{
		echo "Not Validated";
	}
?>

</body>
</html>