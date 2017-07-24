<?php

function __autoload($ClassName)
{
    include($ClassName.".php");
}

$CustomClassObj = new CustomClass(); // define a class "CustomClass" out some where,
// this magic fucntion will include that class if not found here.
// this may not work as "customclass" has not been defined anywhere.


$CustomClassObj1 = new CustomClass1();
$CustomClassObj2 = new CustomClass2();

?>
