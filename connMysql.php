<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "class1";
$port       = 6033;

//creat connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);

//check connection
if (mysqli_connect_error()) {
	print"failed to connect to mysql:".mysqli_connect_error();
} else {
	//print "connect successfully<br>";
}

mysqli_query($conn, "SET NAMES utf8");

//.....以上為固定使用的語法

?>