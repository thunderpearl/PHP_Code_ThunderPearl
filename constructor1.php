

<!DOCTYPE html>
<html>
<head>
    <title>This is for constructor</title>
</head>
<body>
            <?php
        //Your practice code

        class User {
          private  $firstName; 
          private $lastName; 

            public function __contruct($firstName, $lastName)
            {

                $this->firstName = $firstName;
                $this->lastName  = $lastName;
            }

            public function getFullName()
            {

                return $this->firstName . " " . $this->lastName ;
            }

        }

        $user1 = new User("John","Doe"); # as soon as object is created, constructor will get executed.
        echo $user1->getFullName();
        ?>
</body>
</html>>