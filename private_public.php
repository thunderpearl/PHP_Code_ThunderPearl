<?php
//Your practice code
 
class User {
 
  // We use the private access modifier in order to prevent code from outside 
  // the class from modifying the property’s value.
  private $firstName;
 
  // A public setter method allows us to set the $firsName property.
  public function setFirstName($str)
  {
    $this -> firstName = $str;
  }
  
  # This is the method to return the first name
  public function rfirstname()
  {
      return $this->firstName;
  }
}

$user1 = new User();
$user1->setFirstName("Joe"); # We have to set the property this way because "firstName" 
echo $user1->rfirstname();   # is made private here. Hence, we have to use this way.
?>