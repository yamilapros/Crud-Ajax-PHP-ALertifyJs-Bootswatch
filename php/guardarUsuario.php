<?php
require_once "conexion.php";
$conexion = conexion();

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['telefono'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, apellido, email, telefono) VALUES ('$nombre', '$apellido', '$email', '$telefono')";
    echo $result = mysqli_query($conexion, $sql);
}


