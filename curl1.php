 	


<?php

// cURL is a command line tool.


// Initialize the session
// set soptions
// execute session
// session close

$ch = curl_init();   // Initializing the cURL.

curl_setopt($ch, CURLOPT_URL, "http://code.tutsplus.com/tutorials/techniques-for-mastering-curl--net-8470");

$output = curl_exec($ch);

if($output===FALSE)
{
	echo "Curl error is ". curl_error($ch);
}

curl_close($ch);


// http://code.tutsplus.com/tutorials/techniques-for-mastering-curl--net-8470

?>
