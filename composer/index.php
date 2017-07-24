
<?php

include_once __DIR__ . "/vendor/autoload.php";

/*
	include_once('ABC.php'); // This is way how below objects like be worked else it won't.
	include_once('XYZ.php');
*/
	/*
	$abcobj = new ABC();  // we have deleted these files XYZ.php and ABC.php
	echo "<br>";
	$xyzobj = new XYZ();
*/

	use Dompdf\Dompdf;
	$pdf = new Dompdf;

	$pdf->loadHtml('<h1>Hello People, Welcome to the world of Composer and Laravel</h1>');
	
	$pdf->render();
	
	$pdf->stream();
?>