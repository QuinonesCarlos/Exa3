<?php
include 'conexion.php';
include_once 'database.php';

session_start();

$usr = $_SESSION['usr'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$piezas = $_POST['piezas'];
$no_piezas = $_POST['no_piezas'];
$defectuosas = $_POST['defectuosas'];
$id = $_POST['no'];

$consulta = "UPDATE lotes set inicio_prod = '$inicio', fin_prod = '$fin', tipo_piezas = '$piezas', no_piezas = '$no_piezas', no_piezas_def = '$defectuosas', no_piezas_def = '$defectuosas' WHERE No = '$id'";

if ($conexion->query($consulta)) {
    echo '<script>alert("Modificado con éxito")</script>';
    echo "<script>location.href='admin.php'</script>";	
} else {
    echo "Error: " . $consulta . "<br>" . $conexion->error;
}

mysqli_close($conexion);

?>