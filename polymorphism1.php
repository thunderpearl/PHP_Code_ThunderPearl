
<?php

// This is a fine example of the overloading(polymorphism), 

interface shape    // interface is defined here, so we sorta have to use this function "calcarea", same concept work in abstractoin
{
	public function calcarea();
	
}



class circle implements shape          // this class "circle" implements the "shape" interface
{
private $radius;

public function __construct($radius)     // this is a constructor, As soon as we create object this function will get executed
{
	$this->radius = $radius;
}	

	
	public function calcarea()          // "calcarea" function which we implemented, we are definsing here
	{
		return $this->radius*$this->radius*pi();
	}
}




class rectangle implements shape    // "rectangle" implements the "shape" interface
{
private $width;
private $height;                   // private variables can be used by function of of the same class, else no one can access these.

public function __construct($width, $height)   // this is again a cosntructor
{
	
	$this->width = $width;
	$this->height = $height;
} 	


	public function calcarea()   // implemented "calcarea" fucntion
	{
		return $this->width*$this->height ;
	} 	
}


$circ = new circle(5);       // objects have been created here and value have been passed
$rect = new rectangle(5,7);  // these values will be assigned into the constructor fucntion defined above

echo $circ->calcarea();     // calling function "calcarea" for each class using the obejcts.
echo "<br>";
echo $rect->calcarea();     // hence we completed the overloading.

?>