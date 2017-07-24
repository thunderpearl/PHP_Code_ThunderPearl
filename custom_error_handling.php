


<?php
//error handler function
// This is the example for the custom error handling.

function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr";
}

//set error handler
set_error_handler("customError");

//trigger error bcoz there is no $test variable.
echo($test);
?>
