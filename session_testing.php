

<?php 

// session has to be started before accessing any session variable
// And, that page must be active where session has been started to access variable from here.
session_start();

echo $_SESSION['counter'];
?>