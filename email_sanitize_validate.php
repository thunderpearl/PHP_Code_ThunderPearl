

<?php
	$email = "abc@gmail.com";

	// This will remove illegal symbols from the email.
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);


	// This will validate the email.
	// !filter_var($email, FILTER_VALIDATE_EMAIL), this will return false
	if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
	{
		echo "$email is sanitized and a valid email. ";
	}

	else
	{
		echo "$email is not a valid email.";

	}

?>
