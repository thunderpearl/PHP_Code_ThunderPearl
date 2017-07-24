

<?php
    class dogtag {
        public $Words;
    }

    class dog {
        public $Name;
        public $DogTag;

        public function bark() {
            print "Woof!\n";
        }

        public function __construct($DogName) {
            print "Creating $DogName\n";
            $this->Name = $DogName;
            $this->DogTag = new dogtag;   // We are creating an object here
            $this->DogTag->Words = "My name is $DogName. If you find me, please call 555-1234";   // It is same as $this->words = "aldalnal";

			//$this->DogTag->Words = "My name is $this->Name. If you find me, please call 555-1234";  this will also give same result.
        }
    }

    class poodle extends dog {
        public function bark() {
            print "Yip!\n";
        }
    }

    $poppy = new poodle("Honey");
    print $poppy->DogTag->Words . "\n";
	// This below is the general comment about the constructor, nothing to do with this program.
	// PHP only ever calls one constructor for you. If you have several constructors in a class structure, PHP will only call the first one it finds.
?>
