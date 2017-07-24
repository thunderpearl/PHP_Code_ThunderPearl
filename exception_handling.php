

<?php
// PERFECT EXAMPLE OF EXCEPTION HANDLING
//create function with an exception
function checkNum($number) {     // this is a function for checking whether number is greater than 1 or not.
  if($number>2) {
    throw new Exception("Value should enter 1 or below");   // This will throw the exception.
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(1);


  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e)     // "$e" is an object which will be used with method "getMessage()".
{    // This will catch the exception. :D :D :D
  echo 'Message: ' .$e->getMessage();
}
?>
