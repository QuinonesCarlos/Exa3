<?php
include 'conexion.php';
$id = $_POST['id'];


$consulta = "delete from usuarios where id = '".$id."'";

mysqli_query($conexion,$consulta) or die (mysqli_error());


echo'<script type="text/javascript">
        alert("Usuario eliminado correctamente");
        window.location.href="admin.php";
        </script>';
mysqli_close($conexion);
?>