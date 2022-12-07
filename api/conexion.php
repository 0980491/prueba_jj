<?php

$dbhost = "likn_host";
$dbuser = "0";
$dbpass = "0";
$dbname = "0";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
	die("No hay conexion:" .mysqli_connect_error());
}
?>