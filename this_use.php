<html>

    <!--This program is to understand the use of "this" key word-->
    
    <?php
        //Your practice code

        class User {

        // The class properties.
        public $firstName;

        public $lastName;

        // A method that says hello to the user.
        public function hello()
            {
            return "hello" . $this->firstname . " " . $this->lastname ;
            }
        }

        $user1 = new User();

        # settting up the user's firstname and lastname.
        $user1->firstname = "Jonnie";
        $yser1->lastname = "Roe";

        # the hello method.
        echo $user1->hello();
    ?>
</html>