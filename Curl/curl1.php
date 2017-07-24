

<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://stackoverflow.com/questions/36006939/spliting-one-hour-into-four-equal-part");

curl_exec($ch);

curl_close($ch);

?>