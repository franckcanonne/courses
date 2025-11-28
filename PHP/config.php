<?php

$host = '';
$username = '';
$password = '';
$database = 'courses';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection échouée: " . mysqli_connect_error());
}
?>

