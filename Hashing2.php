


<?php

$string = "I am a siting";

// This is we are using md5.
$md5_result = md5($string);

echo "$md5_result"."<br>";

// This is called Hashing........
echo hash('md5',$string);



 ?>
