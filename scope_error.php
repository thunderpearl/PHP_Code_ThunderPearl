<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope
  
function myTest() {
     // using x inside this function will generate an error
     echo "<p>Variable x inside function is: $x</p>";
    // Here, we do not have any variable $x defined inside the function. So, it will give error
    // or it will print nothing after ":z"
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>