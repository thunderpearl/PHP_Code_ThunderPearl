<html>
<?php
//Your practice code
 

class User {
 
  public $firstName;
  public $lastName;
 
    # hello function is defined.
  public function hello()
  {
    return "hello";
  }
}
 
 
$user1 = new User(); # object/instance has been created here of class "User".
    
$user1->firstname = 'John' # setting firstname and lastname's values :D :D :D 
$user1->lastname = 'Doe'
    
    echo $user1->hello() . $user1->fisrtname. " " > $user1->lastname;

?>

</html>