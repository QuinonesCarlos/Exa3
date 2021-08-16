<?php
    include_once 'database.php';
    
    session_start(); 

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;

            case 2:
            header('location: vendedor.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[3];

            $_SESSION['usr'] = $username;
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: admin.php');
                break;

                case 2:
                header('location: vendedor.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo '<script>alert("Nombre de usuario o contraseña incorrecto")</script>';
        }
        

    }

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
            <a href="../index.html">
                <p class="logo">TicOSolutions</p>
            </a>
            <!-- <img class="menu-icon" src="../imagenes/menu.png" alt=""> -->
            <nav>
                <ul class="lista-menu">
                    <li><a href="../registrar.html">Registrarme</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <form id="contact" action="#" method="POST">
                <h3>Inicio de sesión</h3>
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
                    <p>¿No tienes una cuenta? Crea una dando clic <a href="../html/registrar.html"> aquí.</a></p>
                </fieldset>
            </form>
        </div>
    </div>

</header>

<body>

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

</body>

</html>