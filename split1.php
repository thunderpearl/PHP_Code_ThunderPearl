

<?php
    $string = "Hey I am a sentence";
    $split_array = split(" ",$string);

    foreach ($split_array as $value) {
        echo "$value"."<br>";
    }

    // This below code is used for sending us to the below php.
    header("Location:explode.php");


?>
