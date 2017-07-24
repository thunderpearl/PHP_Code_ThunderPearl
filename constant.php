<!DOCTYPE html>
<html>
<body>

<?php

    # In php constants are globally available
    # We can access them through out the whole script without the use of "global" keyword.
define("_GREETING", "Welcome to W3Schools.com! <br> And, second time practicing from Tutorials Point.");
  // constant name must start with a letter or underscore.

function myTest() {
     echo _GREETING;


}

myTest();
?>

</body>
</html>
