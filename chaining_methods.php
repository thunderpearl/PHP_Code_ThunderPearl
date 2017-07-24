
<html>

    <head>
        <title>Chaining Methods</title>
        <meta http-equiv="refresh" content="5" >
    </head>

    <body>
            <?php
            //Your practice code

            class User {

              // The class properties.
              public $firstName;
              public $lastName;

              // A method that says hello to the user $firstName.
              // The user $firstName property can be approached with the $this keyword.
              public function hello()
              {
                return "hello, " .  $this->firstName;
              }

              public function register()
              {
                  echo $this->firstName . $this->lastName ." " . "registered ";
                  return $this;
              }

              public function mail()
              {
                  echo "emailed.";
              }


            }
            $user1 = new User();
            $user1->firstName = "jane ";
            $user1->lastName = "Roe";
            $user1->register()->mail();  # This is chaining of methods

            /*

            Notice that each method we want to chain to should return the $this keyword.
            So, if we would like to write the next line of code that chains together 3 methods:

         1
        $user1 -> register() -> mail() -> hello();
        We would have to return the $this keyword from both the register() and mail() methods, but we won't have to return the $this keyword from the hello() method because it concludes the chain.

            */

        # This code is not working on browser but it is right example.

            ?>
    </body>
</html>
