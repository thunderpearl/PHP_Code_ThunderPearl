    <!DOCTYPE html>
    <html>
        <head>
          <title> Introduction to Object-Oriented Programming </title>
          <link type='text/css' rel='stylesheet' href='style.css'/>
        </head>
    	<body>
          <p>
          <?php
            // The code below creates the class
            class Person {
                // Creating some properties (variables tied to an object)
                private $isAlive = true;
                private $firstname;
                private $lastname;
                private $age;

                // Assigning the values
                public function __construct($firstname, $lastname, $age) {
                  $this->firstname = $firstname;
                  $this->lastname = $lastname;
                  $this->age = $age;
                }

                // Creating a method (function tied to an object)
                public function greet() {
                  return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
                }

                // This constructor and function are created under the class "Person"
                // Later, they will be called by creating an object "$me".
              }

            // Creating a new person called "boring 12345", who is 12345 years old ;-)
            $me = new Person('boring', '12345', 12345);

            // Printing out, what the greet method returns
            echo $me->greet();
            ?>
            </p>
        </body>
    </html>
