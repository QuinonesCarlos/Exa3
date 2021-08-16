<?php
include 'conexion.php';

$username = $_POST['username'];
$password = $_POST['password'];
$id = '';
$rol = '2';

$consulta = "insert into usuarios values ('".$id."','".$username."','".$password."','".$rol."')";

if ($conexion->query($consulta)) {
    echo '<script>alert("Registro realizado con éxito, inicie sesión.")</script>';
    echo "<script>location.href='login.php'</script>";	
} else {
    echo "Error: " . $consulta . "<br>" . $conexion->error;
}

// $consulta2 = "insert into usuarios values ('".$id."','".$username."','".$password."','".$rol."')";

// if ($conexion->query($consulta2)) {
//     echo '<script>alert("Registro realizado")</script>';
//     echo "<script>location.href='login.php'</script>";	
// } else {
//     echo "Error: " . $consulta2 . "<br>" . $conexion->error;
// }


mysqli_close($conexion);

?>