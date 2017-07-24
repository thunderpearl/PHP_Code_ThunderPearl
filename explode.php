

<?php

$string = "hello-I-am-champ";

$result_explore = explode("-", $string);

echo $result_explore[0];

echo "<br>";

foreach ($result_explore as $value) {
	echo "$value\t";
}


?>
