

<!DOCTYPE html>
<html>
<body>

<?php

// Remove all the html tags from string.
$str = "<h1>Hello World!!!!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

</body>
</html>