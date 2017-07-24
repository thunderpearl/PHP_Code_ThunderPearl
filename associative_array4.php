<!DOCTYPE html>
<html>
<body>

<?php
    $x = array(1,3,2,3,7,8,9,7,3);
    
    # array_count_values() returns the total count of the values
    # like "8" is once only hence it will print 1
    # "3" is 3 times hence it will print 3
    $y = array_count_values($x);
    echo $y[8];
?>

</body>
</html>