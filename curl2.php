

<?php

// Nice practice for the curl.

// Initializing
$ch = curl_init();

// setting option
curl_setopt($ch, CURLOPT_URL, "https://leaksource.files.wordpress.com/2014/08/the-web-application-hackers-handbook.pdf");

//Executing
$output = curl_exec($ch);

if($output===FALSE)
{
	echo "<b>Curl Error:</b> " . curl_error($ch);
}

//Getting Information
$info = curl_getinfo($ch);

echo "Took ". $info['total_time'] . ' seconds in url ' . $info['url'] ."<br> ". $info['size_download'];

curl_close($ch);


// Following Information is returned in curl_getinfo

/*

"url"
"content_type"
"http_code"
"header_size"
"request_size"
"filetime"
"ssl_verify_result"
"redirect_count"
"total_time"
"namelookup_time"
"connect_time"
"pretransfer_time"
"size_upload"
"size_download"
"speed_download"
"speed_upload"
"download_content_length"
"upload_content_length"
"starttransfer_time"
"redirect_time"

*/



?>