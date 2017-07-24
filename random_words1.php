<?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $rand_keys[0]."\t"; // This will tell the index of the random elements
echo $rand_keys[1]."<br>";

echo $input[$rand_keys[0]]. " " . $input[$rand_keys[1]]; 


?>
