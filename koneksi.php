<!-- koneksi.php -->
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "2106091_nisa";

$db = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
