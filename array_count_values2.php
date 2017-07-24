


<?php
$a = array('aaa','bb','ccccc','d','eee','ccccc');
$b = array('aaa', 'ccc', 'ddd', 'aaa', 'aaa');
$c = array('cc','dd', 'dd', 'dd');

/*
$y  = array_count_values($a) + array_count_values($b) + array_count_values($c)

This is not working......
*/					

$y = array_count_values($a);								
echo $y['ccccc'];      // Like here "ccccc" has occured 2 times.
?>