

<?php
$url = 'https://web.facebook.com/WhiteHoleAsia/?hc_ref=NEWSFEED&fref=nf';  
$url=parse_url($url);
echo 'Scheme : '.$url['scheme'].'<br />';
echo 'Host : '.$url['host'].'<br />';
echo 'Path : '.$url['path'].'<br />';
?>
