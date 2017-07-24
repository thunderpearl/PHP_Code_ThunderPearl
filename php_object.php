<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
        class Person
        {
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            }
        {
            $teacher = new Person();  // Object "$teacher" is been created here from the class "Person". 
            $student = new Person();
            
            echo $teacher->isAlive;    // public property "$isAlive" is used with the object "$teacher".  
            
            }
        ?>
      </p>
    </body>
</html>