

<?php

define("MAX_LENGTH", 6);

$second_para = constant("MAX_LENGTH");

function generateHashWithSalt($password) {
    $intermediateSalt = md5(uniqid(rand(), true));
    $salt = substr($intermediateSalt, 0, $second_para);
    return hash("sha256", $password . $salt);


$hashed_password = generateHashWithSalt("hello world"); 

echo constant("MAX_LENGTH");
print_r($hashed_password);  

echo ("fafafafaf");

echo "$abc: 1";
}
?>