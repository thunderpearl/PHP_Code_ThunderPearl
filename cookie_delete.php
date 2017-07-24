
<!DOCTYPE html>
<?php

// cookies can be deleting by just giving name argument and rest vacant.

// set the expiration date to one hour ago
// Here cookie time is in seconds.
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>

