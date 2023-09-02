<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "formulario";

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection){
    die("Conexión fallida: " . mysqli_connect_error());
}

?>
