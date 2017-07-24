
<html>
<?php
    define("x","5");
    $x= x+10;
    echo x."<br>";
    echo "\n";
    echo $x;
    # In define "x" is a constant defined with value "5".
    # We echo "x" not $x hence on "echo x" we got 5 and on second line $x it is 15.
    # constants don't have $ sign and they are globally accessible :D
    
define("CURRENT_TIME", time(), true);
echo "<br>";    
echo Current_TiMe;
?>
  <!--
# <br> is for line break
# \n is for putting white space between 2 words. 
    -->  
</html>    
