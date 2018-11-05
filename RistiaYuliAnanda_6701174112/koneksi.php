<?php

$username = "root";
$password = "";
$database = "webdasar";
$servername = "localhost";

$conn = mysqli_connect($servername, $username, $password, $database);

if )($conn) {
	die ("Koneksi gagal: " . mysqli_connect_error());
}

?>