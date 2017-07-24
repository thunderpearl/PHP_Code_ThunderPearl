

<?php

// This is the php code for arranging array in increasing order.  

$arr = array(80, 90, 100, 10, 50, 3);

for($a = 0; $a < count($arr); $a++) {
    for($b = 0; $b < count($arr)-1; $b ++){
        if($arr[$b] > $arr[$b+1]) {
            $temp = $arr[$b+1];
            $arr[$b+1]=$arr[$b];
            $arr[$b]=$temp;
        }       
    }
}

// This below "print_r" is used to print the human readable data on the screen. 
print_r($arr);
?>