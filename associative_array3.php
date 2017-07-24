<!DOCTYPE html>
<html>
<body>

<?php
    $x = array("aaa", "ttt", "www", "ttt", "ttt", "tttt");
    
    # This function returns all the values of the array.
    $y = array_count_values($x);
    echo $y;
    echo $y[ttt];
?>
</body>
</html>