

<?php

/*

Try − A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown".

Throw − This is how you trigger an exception. Each "throw" must have at least one "catch".

Catch − A "catch" block retrieves an exception and creates an object containing the exception information.

*/


/*

An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block.

Each try must have at least one corresponding catch block. Multiple catch blocks can be used to catch different classes of exceptions.

Exceptions can be thrown (or re-thrown) within a catch block.

*/


   try {

      $error = 'Always throw this error';
      throw new Exception($error);  // If we do not give "$error" here then above message will not print.

      // Code following an exception is not executed.
      echo 'I am getting executed because Exception Never happened';
   }catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";   // we can put "." also in place of ","  , but as we know "echo" can take multiple parameter
   }

   // Continue execution
   echo 'Hello World';


   /*

getMessage() − message of exception

getCode() − code of exception

getFile() − source filename

getLine() − source line

getTrace() − n array of the backtrace()

getTraceAsString() − formated string of trace

   */

?>
