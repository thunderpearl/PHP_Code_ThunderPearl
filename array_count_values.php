

<?php
$x = array('aaa','bb','ccccc','d','eee','ccccc');

$y  = array_count_values($x);  // This counts the number of times that parameter has occured in the array.														
echo $y['ccccc'];      // Like here "ccccc" has occured 2 times.
?>