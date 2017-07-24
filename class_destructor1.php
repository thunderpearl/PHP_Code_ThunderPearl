

<?php
// This is the example of class destructor.
// Destructor will be executed as soon as object is deleted.
// Destructor takes no parameter.

class MyDestructableClass {
   function __construct() {
       print "In constructor\n";
       $this->name = "\tMyDestructableClass";
   }

   function __destruct() {
       print "Destroying " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();

?>
