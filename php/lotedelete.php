<?php
include 'conexion.php';
$no = $_POST['no'];


$consulta = "delete from lotes where No = '".$no."'";

mysqli_query($conexion,$consulta) or die (mysqli_error());


echo'<script type="text/javascript">
        alert("Lote eliminado correctamente");
        window.location.href="admin.php";
        </script>';
mysqli_close($conexion);
?>