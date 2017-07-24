

<?php

$server = "localhost"; //XAMPP or cPanel
$username = "root";
$password = "secret";
$database = "";

$connection = mysql_connect($server, $username, $password) or die("Cant connect");
mysql_select_db($database, $connection);

function pullData($query)
{
    // this is for getting the output in the form of associative array.
    return mysql_fetch_assoc(mysql_query($query));

}

function pushData($query)
{
    mysql_query($query);
}

// Unlike java, we can directly use methods if they are nt part of class.
echo pullData("SELECT * FROM username WHERE id=1"); //admin
pushData("INSERT INTO users VALUES `admin` WHERE id=1");


?>
