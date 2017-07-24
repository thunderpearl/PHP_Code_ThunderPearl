

<?php
    echo "This is for finding if something is inside array or not"."<br>";

    //echo "<br>";
    $arrayName = array("machine","samaritan","harold","john","zoe","root");

    echo "Number of elements in the array is ". count($arrayName)."<br>";

    if (in_array("machine",$arrayName)) {
        echo "Match found";
    }

    else {
        echo "Match do not found";
    }

 ?>
