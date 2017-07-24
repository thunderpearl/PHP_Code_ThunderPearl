

<?php
   function exception_handler($exception) {
       // as echo can take multiple parameters.
      echo "Uncaught exception: " , $exception->getMessage(), "\n";
   }

   set_exception_handler('exception_handler');
   throw new Exception('Uncaught Exception this time');

   echo "Not Executed\n";
?>
