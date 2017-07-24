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
	$filters = array(); 
	$filters = filter_list();  // "filter_list()" will give the list of all the available filters.
	
	for($x=0; $x < count($filters); $x++)
	{
	echo $filters[$x] . "<br>";
	}
?>

</body>
</html>