<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="5" />
</head>

<body>

<?php
$cars = array
   (
   array("Volvo",22,18),
   array("BMW",15,13),
   array("Saab",5,2),
   array("Land Rover",17,15)
   );

   /* We can embed html in php and php in html
      as per our convenience */

for ($row = 0; $row <  4; $row++) {
   echo "<p><b>Row number $row</b></p>";
   echo "<ul>";
   for ($col = 0; $col <  3; $col++) {
     echo "<li>".$cars[$row][$col]."</li>";
   }
   echo "</ul>";
}
/* This is an good example of multidimentional array*/

?>

</body>
</html>
