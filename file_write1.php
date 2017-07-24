

<?php

echo "We are gonna write a file";

$file_path = "C:\Javapractice\sample_php_file.txt";

$file = fopen("$file_path","w");

$string = "Hey! Admin";

// writing the file.
fwrite("$file","$string");

// closing the open file.
fclose($file);

 ?>
