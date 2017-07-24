<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <?php
        class Person 
        {
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            public  function __construct($firstname, $lastname, $age)         
            {
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->age = $age;
            }
            
            public function greet()
            {
                return "Hello, my name is ".$this->firstname." ".$this->lastname. ". Nice to meet you! :-)".
                // We even declare the values in the same way with constructor 

                // function Car() {
                 //   $this->model = "VW";
                 // }
            } 
        }
            $teacher = new Person("boring","12345",12345);
            $student = new Person("first","last", 23);
            echo $teacher->isAlive; // accessing the property of teacher.
            echo $student->age; // acessing the property of student.
            echo $teacher->greet();
            echo $student->greet();
        ?>
    </body>
</html>