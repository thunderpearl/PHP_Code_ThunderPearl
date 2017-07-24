<?php

// This code is for receiving the rss feeds using cURL.
$ch = curl_init("http://www.dreamhoststatus.com/feed/");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

$xml = simplexml_load_string(curl_exec($ch));
curl_close($ch);

print "<ul>\n";
foreach ($xml->channel->item as $item){
  print "<li>$item->title</li>\n";
}
print "</ul>";

?>