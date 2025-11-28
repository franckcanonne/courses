<?php

$host = 'localhost';
$username = 'franck';
$password = 'MariaDB#d93jtd29';
$database = 'courses';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection échouée: " . mysqli_connect_error());
}
?>
