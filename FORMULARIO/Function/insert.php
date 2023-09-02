<?php

//print_r($_POST);

require('../Connection/connection.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$query = "INSERT INTO usuario (nombre,email,tel) VALUES ('$nombre', '$email', '$telefono')";

$ejecutar = mysqli_query($connection, $query);

header("Location:../index.php");

//print("<br> Nombre de usuario: " . $nombre . " email:" . $email . " tel: ". $telefono);


?>