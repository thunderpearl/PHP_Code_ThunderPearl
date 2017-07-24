<?php
    class dog {
        public $Name;

        public function bark() {
            print "Woof!\n";
        }

        // public function meow() {
            // print "Dogs don't meow!\n";
        // }

        public function __call($function, $args) {
            $args = implode(', ', $args);   // This "implode" will join the array using the seperator ","
            print "Call to $function() with args '$args' failed!\n";
        }
    }

    $poppy = new dog;
    $poppy->meow("foo", "bar", "baz"); // as "meow()" is not defined php will search for the "__call()" and pass its argument to the argument of "__call()".
?>