<?php
    class person1 {
        public $FirstName = "Bill";
        public $MiddleName = "Terence";
        public $LastName = "Murphy";
        private $Password = "Poppy";
        public $Age = 29;
        public $HomeTown = "Edinburgh";
        public $FavouriteColour = "Purple";
    }

    $bill = new person1();

    foreach($bill as $var => $value) {
        echo "$var is $value\n";
    }
	
	class person2 {
        public $FirstName = "Bill";
        public $MiddleName = "Terence";
        public $LastName = "Murphy";
        private $Password = "Poppy";
        public $Age = 29;
        public $HomeTown = "Edinburgh";
        public $FavouriteColour = "Purple";

        public function outputVars() {
            foreach($this as $var => $value) {
                echo "$var is $value\n";
            }
        }
    }

    $bill = new person2();
    $bill->outputVars();
?>