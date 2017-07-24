
<?php

	// This is perfect example for the custom error handling.
	// By default error_reporting is ON.

	//error_reporting(E_Warning);
	// By default error_reporting is set for E_ALL here in the php.in here in php 5.x

	function error_handle($errlevel, $errmess, $errfile)
	{
		// This is the error message which is gonna be print of the browser with the respective errors.
		print "<strong>The level of error is $errlevel and [error_message]:-</strong> $errmess.<br>";
		print "<strong>Name of the [error file]:-</strong> $errfile\n";

	}

	set_error_handler("error_handle");
	// as we have no value assigned to $val then it will throw error
	echo $vol;
?>
