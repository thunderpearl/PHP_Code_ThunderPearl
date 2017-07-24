<?php
    echo "<h3>This is the test of html inside the string</h3>";
?>
<!--We can't directly put html inside php tag, within the string we can use html-->
 <h4> This program is for checking use of basename </h4>
 <?php
    // This below function will give the name of the present file.
    echo basename(__FILE__). "<br>";

    echo __LINE__;
 ?>
