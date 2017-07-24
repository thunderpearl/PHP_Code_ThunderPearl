

<?php

/*
A destructor is called when the object is destroyed. In some programming languages,
 you have to manually dispose of objects you created,
 but in PHP, it's handled by the Garbage Collector,
 which keeps an eye on your objects and automatically destroys them when they are no longer needed.
*/
class Animal
{
    // we have to make this public as this has to be accessed outside the class.
    public $name = "No-name animal";

    public function __construct($name)
    {
        echo "<i>I'm the CONSTRUCTOR and I am gonna get called as soon as Object will be created.</i>"."<br>";
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "<i>I am DESTRUCTOR and I'm gonna get execute now as object is destroyed</i>";
    }
}

// here object is get created and hence constructor will be called
$animal = new Animal("Bob");

// this is the second thing that will be called 
echo "<b>Name of the animal: </b>" . $animal->name."<br>";

// In above code object is being used and then after that object is destroyed, destructor will be called.
?>
