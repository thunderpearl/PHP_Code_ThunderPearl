<?php

class Animal
{
    public $name;
    
    public function Greet()
    {
        return "Hello, I'm some sort of animal and my name is " . $this->name;
    }
}


class Dog extends Animal
{
   
}
// This will still work though "$name" is not given any string. 

$dog = new Dog();
echo $dog->Greet();
?>