<?php
include 'conexion.php';
include_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
$rol = $_POST['rol'];


$consulta2 = "UPDATE usuarios SET username = '$username', password = '$password', rol_id = '$rol' WHERE id = '$id'";

if ($conexion->query($consulta2)) {
    echo '<script>alert("Modificado con éxito")</script>';
    echo "<script>location.href='admin.php'</script>";	
} else {
    echo "Error: " . $consulta2 . "<br>" . $conexion->error;
}

session_regenerate_id();
$_SESSION['usr'] = $username;

mysqli_close($conexion);

?>