<?php
include 'conexion.php';
session_start();
$usr = $_SESSION['usr'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$piezas = $_POST['piezas'];
$no_piezas = $_POST['no_piezas'];
$defectuosas = $_POST['defectuosas'];
$id = '';

// $iduser = "select id form usuarios where username = '".$usr."'";

$consulta = "insert into lotes values ('".$id."','".$inicio."','".$fin."','".$piezas."','".$no_piezas."','".$defectuosas."','".$usr."')";

if ($conexion->query($consulta)) {
    echo '<script>alert("Lote agregado con exito")</script>';
    echo "<script>location.href='javascript: history.go(-1)'</script>";	
} else {
    echo "Error: " . $consulta . "<br>" . $conexion->error;
}

mysqli_close($conexion);

?>