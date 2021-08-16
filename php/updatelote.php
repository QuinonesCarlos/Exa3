<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }

    $usr = $_SESSION['usr'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
<link rel="stylesheet" href="../estilos/formstyle.css">
    <meta charset="utf-8">
    <!--codificacion del lenguaje-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <title>
        TicOSolutions | Login
    </title>

</head>

<header>
    <div class="menu">
        <div class="contenedor">
            <a href="index.html">
                <p class="logo">TicOSolutions</p>
            </a>
            <!-- <img class="menu-icon" src="../imagenes/menu.png" alt=""> -->
            <nav>
                <ul class="lista-menu">
                    <li><a href="javascript: history.go(-1)">Volver</a></li>
                    <li><a href="cerrarsesion.php">Cerrar sesión</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <form id="contact" action="loteupdate.php" method="POST">
                <h3>Modificar lote</h3>
                <fieldset>
                    Número de lote    <input type="number" min="1" pattern="^[0-9]+" name="no" tabindex="1" required
                        autofocus>
                </fieldset>
                <fieldset>
                    Fecha de inicio de producción    <input placeholder="Fecha de inicio de producción" type="date" name="inicio" tabindex="1" required
                        autofocus>
                </fieldset>
                <fieldset>
                Fecha de fin de producción    <input placeholder="Fecha de fin de producción" type="date" name="fin" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                Seleccione el tipo de piezas    <select name="piezas">
                    <option selected value="0"> Elige una opción </option>
                    <option value="1">Tipo 1</option> 
                    <option value="2">Tipo 2</option> 
                    <option value="3">Tipo 3</option>
                    <option value="4">Tipo 4</option> 
                    <option value="5">Tipo 5</option>
                </select>
                </fieldset>
                <fieldset>
                No. de piezas    <input type="number" min="0" pattern="^[0-9]+" name="no_piezas" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                No. de piezas defectuosas    <input type="number" min="0" pattern="^[0-9]+" name="defectuosas" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <button name="Modificar" type="submit" id="contact-submit" data-submit="...Modificando">Modificar</button>
                </fieldset>
                <fieldset>
                    <!-- <p>¿Ya tienes una cuenta? Inicia sesión <a href="php/login.php"> aquí.</a></p> -->
                </fieldset>
            </form>
        </div>
    </div>
    <center>
            <table border="2">

                <th>No</th>
                <th>Inicio Producción</th>
                <th>Fin Producción</th>
                <th>Tipo piezas</th>
                <th>No. piezas</th>
                <th>No. piezas defectuosas</th>
                <th>Responsable</th>
                
                <?php 
                    include 'conexion.php';
                $resultados = mysqli_query($conexion,"Select * from lotes");
                    while ($fila = mysqli_fetch_array($resultados)) {
                    ?>
                    
                    
                    <tr class ="odd">
                        <td><?php echo $fila['No']?></td>
                        <td><?php echo $fila['inicio_prod']?></td>
                        <td><?php echo $fila['fin_prod']?></td>
                        <td><?php echo $fila['tipo_piezas']?></td>
                        <td><?php echo $fila['no_piezas']?></td>
                        <td><?php echo $fila['no_piezas_def']?></td>
                        <td><?php echo $fila['responsable']?></td>
                    </tr>
                    <?php
                    } ?>
            </table>
            </center>
    <footer>
        <div class="contenedor">
            <div class="redes">
                <a href="https://www.facebook.com//"><img src="../imagenes/facebook.png"></a>
                <a href="https://twitter.com/"><img src="../imagenes/twitter.png" width="24" height="24"></a>
                <a href="mailto:c.j.q.h.99@gmail.com"><img src="../imagenes/gmail.png" width="24" height="24"></a>
            </div>
            <div class="parrafo">
                <p> © 2021 TicOSolutions | Soluciones en Informática.
                    Todos los derechos reservados </p>
            </div>
        </div>
    </footer>
</header>

<body>

</body>

</html>