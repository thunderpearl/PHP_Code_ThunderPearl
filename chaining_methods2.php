
<?php

// In chaining methods every method should return the $this in teh  end to be used in chainging sequence.
class Car {
 
 // If we want to get the class property that is defined below "$tank" then we have to use "$this".
  // We can say "this" is used for accessing instance variable.
  public $tank;
  
  // Add gallons of fuel to the tank when we fill it.
  public function fill($float)
  {
    $this-> tank += $float;
 
    return $this;
  }
  
  // Substract gallons of fuel from the tank as we ride the car.
  public function ride($float)
  {
    $miles = $float;
    $gallons = $miles/50;
    $this->tank -= ($gallons);
 
    return $this;
  }
}



// Create a new object from the Car class.
$bmw = new Car();
 
// Add 10 gallons of fuel, then ride 40 miles, 
// and get the number of gallons in the tank. 
$tank = $bmw->fill(10)->ride(40)->tank;
 
// Print the results to the screen.
echo "The number of gallons left in the tank: " . $tank . " gal.";

?>