<?php
$expenses = array(12, 45, 10, 25);

echo count($expenses). "<br>";

$total = 0;
for($i = 0; $i < count($expenses); $i++)
$total += $expenses[$i];
echo "Total $total"."<br>";  // "\n" this is for the space.
echo "Average " . ($total / $i);
?>