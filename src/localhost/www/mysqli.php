<?php
error_reporting(0);
ini_set('display_errors', 0);
$ip = $_SERVER["SERVER_ADDR"];
$servername = substr($ip,0,strlen($ip)-1)."1:8081";
$username = "root";
$password = "1";
if ($conn = new mysqli($servername, $username, $password)){
	echo "MYSQLi installed.";
}
else {
 echo "MYSQLi not found.";
}
?>
