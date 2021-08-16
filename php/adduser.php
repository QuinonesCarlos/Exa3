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
        <form id="contact" action="useradd.php" method="POST">
                <h3>Añadir usuario</h3>
                <fieldset>
                    <input placeholder="Email" type="email" name="username" tabindex="1" required
                        autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Contraseña" type="password" pattern="[A-Za-z0-9!?-]{8,12}" name="password" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <button name="Ingresar" type="submit" id="contact-submit" data-submit="...Ingresando">Ingresar</button>
                </fieldset>
                <fieldset>
                    <!-- <p>¿No tienes una cuenta? Crea una dando clic <a href="../html/registrar.html"> aquí.</a></p> -->
                </fieldset>
            </form>
        </div>
    </div>
    <br><br><br><br><br><br>
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