
<html>
    <head>
        <title>Abstract class in more clear way</title>
    </head>
    
    <body>
        
        <?php

abstract class animal
{
        abstract function getowned();  # abstract function that has to be used by every child class
        private $age;

        protected function __construct($age) {   // This is constructor of parent class 
                $this->age = $age;
                }

        public function getage()
                {
                return $this->age;
                }
}



// This below interface will be used for polymorhism more precisely called as overloading.
interface insurable {
        public function getvalue();  # Interface function which is going to work as function overloading 
        }



class pet extends animal implements insurable {
        private $name;
        public function __construct($name,$age) 
		{
                parent::__construct($age);   // Calling the parent class's constructor
                $this->name = $name;
                }
				
				
        public function getname() {
                return $this->name;
                }
        public function getowned() {      // abstract function, that has to be used.
                return ("Owner String");
        }
        public function getvalue() {    // interface function
                return ("Priceless");
        }
}



# This class does not inherits from animal class.
# hence it do not have to use the abstract function.        
        
class house implements insurable {
        public function getvalue() {
                return ("Rising fast");
        }

}
        
        
        
$charlie = new pet("Charlie",6);   // object $charlie is been created.
$catage = $charlie -> getage();   // age will get returned to the $catage variable.
$catname = $charlie -> getname();   // name will be returned to the $catname variable.
print "$catname is $catage years old!<br><br>";

if ($charlie instanceof pet) print ("charlie is a pet<br>");  // A subclass's object is "instanceof"(object) parent class but not vice-versa.
if ($charlie instanceof animal) print ("charlie is an animal<br>");  // This will also get print.
if ($charlie instanceof house) print ("charlie is a house<br>");
if ($charlie instanceof insurable) print ("charlie is insurable<br>"); // "instanceof" is valid for the instance also.
        
        /*
        
        An abstract class is a class that contains at least one abstract method, which is a method without any actual code in it, just the name and the parameters, and that has been marked as "abstract".

The purpose of this is to provide a kind of template to inherit from and to force the inheriting class to implement the abstract methods.

An abstract class thus is something between a regular class and a pure interface. Also interfaces are a special case of abstract classes where ALL methods are abstract.


An abstract class is a class that is only partially implemented by the programmer. It may contain one or more abstract methods. An abstract method is simply a function definition that serves to tell the programmer that the method must be implemented in a child class.
        
        */
?>
        
    </body>
</html>