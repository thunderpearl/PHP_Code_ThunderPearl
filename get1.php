<?php
    class dog {
        public $Name;
        public $DogTag;
        // public $Age;

        public function __get($var) {      // This will work even if $Age is not present in the code. It's bcoz of "__get()" magic function.
            print "Attempted to retrieve $var and failed...\n";
        }
    }

    $poppy = new dog;
    print $poppy->Age;
?>