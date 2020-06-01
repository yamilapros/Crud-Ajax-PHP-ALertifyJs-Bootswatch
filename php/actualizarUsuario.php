<?php
require_once "conexion.php";
$conexion = conexion();

if(isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['telefono'])){
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$sql = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = '$telefono' WHERE id = '$id'";
echo $result = mysqli_query($conexion, $sql);
}

?>