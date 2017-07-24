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
       public function Greet()
    {
        return "Hello, I'm a dog and my name is " . $this->name;
    }
}
// function "Greet" of Animal has been overwrite by function "Greet" of Dog. 
// This will still work though "$name" is not given any string. 

$dog = new Dog();
echo $dog->Greet();