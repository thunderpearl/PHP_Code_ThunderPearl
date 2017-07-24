

<?php
// This was a short example of passing the argument by reference :D :D :D 

function foo(&$var)  // & has  to be used for passing the value by reference :D
{
    $var++;
    return $var;
}

$a=5;
echo foo($a)."<pre>";
// $a is 6 here


function addFive($num) {
            $num += 5;
         }
         
         function addSix(&$num) {
            $num += 6;
         }
         
         $orignum = 10;
         addFive( $orignum );
         
         echo "Original Value is $orignum<br />";
         
         addSix( $orignum );
         echo "Original Value is $orignum<br />";
?> 