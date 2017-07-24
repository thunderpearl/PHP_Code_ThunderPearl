


<?php
    class cat {
        public function __toString() {
            return "This is a cat\n";  // This string is used if object is used as a string.
        }
    }

    $toby = new cat;  // We must make the practice of sing parethesis though result will be same in this case.
    print $toby;  // Object is used as string.
?>