

<?php
	echo "<h3>This is for the person1</h3>";
    class person1 {
        public $FirstName = "Bill<br>";
        public $MiddleName = "Terence<br>";
        public $LastName = "Murphy<br>";
        private $Password = "Poppy<br>";
        public $Age = 29;
        public $HomeTown = "Edinburgh<br>";
        public $FavouriteColour = "Purple<br>";
    }

    $bill = new person1();

    foreach($bill as $var => $value) {
        echo "$var is $value\n";
    }
	echo "<br>";
	echo "<h3>This is for the person2</h3>";
	class person2 {
        public $FirstName = "Bill<br>";
        public $MiddleName = "Terence<br>";
        public $LastName = "Murphy<br>";
        private $Password = "Poppy<br>";
        public $Age = 29;
        public $HomeTown = "Edinburgh<br>";
        public $FavouriteColour = "Purple<br>";

        public function outputVars() {
            foreach($this as $var => $value) {
                echo "$var is $value\n";
            }
        }
    }

    $bill = new person2();
    $bill->outputVars();
?>