<?php

class Animal
{
    public $name;
    
    public function Greet()
    {
        return "Hello, I'm some sort of animal and my name is " . $this->name. "<br>";
    }
}


class Dog extends Animal
{
       public function Greet()
    {
        return "Hello, I'm a dog and my name is " . $this->name;
    }
} 
// This will still work though "$name" is not given any string.
$animal = new Animal();
echo $animal->Greet();

// Now, $animal is object of class "Dog" previous $animal has been destroyed and collected by garbage collector.
// This new $name is object of "Dog" class.
$animal = new Dog();
$animal->name = "Bob";
echo $animal->Greet();


