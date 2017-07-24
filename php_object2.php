<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <?php
        class Person 
        {
            public $isAlive = true;    // This value is pblic for all :D
            public $firstname;
            public $lastname;
            public $age;
            public  function __construct($firstname, $lastname, $age)  // This is the constructor and values have been passed in it.       
            {
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->age = $age;
            }
        }
            $teacher = new Person("boring","12345",12345);  
            $student = new Person("first","last", 23);
            // Creation of Object "$teacher" and as soon as we will create it values will be assigned in public variables :D :D :D .

            echo $teacher->isAlive;
            echo $student->age;
        ?>
    </body>
</html>