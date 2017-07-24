

<?php
class mama
{
	public $name;
	public $age;
	
	public function say_name_age()
	{
		echo $this->name = "yoyo";   // when inside a function definition we need to work with "$this" for accessing the variable.
		// PHP automatically sets "$this" variable contains the object. 
	}
}

$obj1  = new mama();
$obj1->age = 25;
echo "$obj1->age<br>";  // This is also way of assigning the value to a  variable.
$obj1->say_name_age();   // "$this" is basically used for accessing the variables of a class, assigning them values and also in the constructor.  
?>