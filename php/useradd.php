<?php
include 'conexion.php';

$username = $_POST['username'];
$password = $_POST['password'];
$id = '';
$rol = '1';

$consulta2 = "insert into usuarios values ('".$id."','".$username."','".$password."','".$rol."')";

if ($conexion->query($consulta2)) {
    echo '<script>alert("Agregado con éxito")</script>';
    echo "<script>location.href='admin.php'</script>";	
} else {
    echo "Error: " . $consulta2 . "<br>" . $conexion->error;
}


mysqli_close($conexion);

?>