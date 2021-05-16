<?php
$host = "localhost";
$user = "id16823802_root";
$pwd = "Root-12345678";
$dbName = "id16823802_scandi";
$conn = mysqli_connect($host, $user, $pwd, $dbName);
if(!$conn){
	die("connection is failed: ".mysqli_connect_error());
}
?>