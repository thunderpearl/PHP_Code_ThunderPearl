

<?php
$arr = array(1, 2, 3, 4);
$brr = array(2,3,4,5,6,7,8);
$crr = array(1=>"hey", 2=>"whats", 3=>"up");
foreach ($arr as &$value) {
    $value = $value * 2;
}
echo "This is the $value";

echo "<br>";
for($x=0; $x<count($brr); $x++)
{
	echo $brr[$x];
}
echo "<br>";
foreach ($crr as $key=>$value)
{
	print "$key=>$value\n";

}
?>
