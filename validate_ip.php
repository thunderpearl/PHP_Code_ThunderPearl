

<?php
	$ip = "127.0.0.1";

	if(!filter_var($ip, FILTER_VALIDATE_IP) === false)
	{
		echo "Integer is Valid";
	}

	else
	{
		echo "Integer is not Valid";

	}

	// (filter_var($ip, FILTER_SANITIZE_IP));
	// Above line is used for sanitize the email address....

?>
