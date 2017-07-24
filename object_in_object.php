

<?php
class dogtag {
    public $Words;
}

class dog {
    public $Name;
    public $DogTag;

    public function bark() {
        print "Woof!\n";
    }
}

// We can use objects inside other objects in the same as other variable types. For example, we could define a dogtag class and give each dog a dogtag object like this
$poppy = new dog; // $poppy is the object of dog class 

$poppy->Name = "Poppy"; // assigning "Name" a value using object 
$poppy->DogTag = new dogtag;
$poppy->DogTag->Words = "My name is Poppy. If you find me, please call 555-1234";

print "It is working perfectly :D :D :D ";
?>