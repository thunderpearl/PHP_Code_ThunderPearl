

<?php

	// In java we can store only one type of data into array
    // whereas in php different type of data can be stored.
	$array = array(3,4,5,'hello','world');
	$count = count($array);
	//echo $count;
	//exit;
	for($x=0; $x<$count; $x++)
	{
		echo $array[$x].",\t";
	}

	echo "<br>";

	/* It's a kinda advanced for loop in php */
	foreach ($array as $variable) {
		echo "$variable"."<br>";
	}