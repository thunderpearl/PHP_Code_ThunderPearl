

<?php

// This way we can search a STRING we want to search inside a full line...............
// in_array is a different searching way to search but it will search inside an array..

// It will show the first occurance of this word inside the full sentence.

$line = "Hey can you tell me your name";
$string = "can";
//$searched_string;

$searched = strrchr($line, $string);

// echo "$searched";
// exit();

if ($searched) {

	$array = explode(" ", $searched);
	$searched_string = $array[0];
	echo "Seached string is: <strong>$searched_string</strong>";

	 // foreach ($array as $value) {
	 // 	# code...
	 // 	echo "$value"."<br>";
	 // }



}

else
{
	echo "searched string do not exist";
}

?>
