
<!DOCTYPE html>
<html>
<body>

<h1><?php
//echo date_default_timezone_get();
date_default_timezone_set("America/New_York");   // This will set the default time zones
echo "The time is " . date("h:i:sa");  // And this is the standard way of getting the default time to be printed.
?></h1>


</body>
</html>
