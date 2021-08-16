<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: login.php');
        }
    }

    $usr = $_SESSION['usr'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
<link rel="stylesheet" href="../estilos/estilos.css">
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
        TicOSolutions
    </title>

</head>

<body>

    <!-- <a id="whatsapp" href="https://api.whatsapp.com/send?phone=5491130160246"><img src="imagenes/whatsapp.png" alt=""></a> -->
    <header>
        <div class="menu">

            <div class="contenedor">
                <a href="javascript:location.reload()">
                    <p class="logo" id="chico">TicOSolutions</p>
                </a>
                <img class="menu-icon" src="../imagenes/menu.png">
                <nav>
                    <ul>
                        <li><a><?php echo $usr?></a></li>
                        <li><a href="configuracion.php">Configuración</a></li>
                        <li><a href="cerrarsesion.php">Cerrar sesión</a></li>
                    </ul>
                </nav>

            </div>

        </div>
        <center>
            <div class="contenedor" id="contenedor-titulo-flex">
                <div class="contenedor-titulo">
                    
                        <h1 id="uno">Producción</h1>
                    
                    <br>
                    <a href="#tablas">Administrar</a>
                </div>
            </div>
        </center>

        <script>
            setTimeout(()=>{
                const tl = gsap.timeline();
                tl.to("#uno", { duration: .5, y: 0, opacity: 1,  ease: 'expo' })
                // tl.to("#x", { duration: .5, scale: 1, opacity: 1, ease: 'expo' },'-=.5');
                tl.to("#chico", { duration: .5, x: '30%', opacity: 1,  ease: 'expo' })
                // tl.to("#uno", { duration: .75, x: '-100%', opacity: 0, ease: 'expo' }, '-=.3');
    
            }, 1000)
        </script>

    </header>

    <section id="tablas">

        <div class="contenedor">
            <h3>Administración de lotes</h3>
            <div class="contenedor-sobremi">
            <div class="texto">
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
            </div>
            </div>
        </div>

                <section id="que-esperas">
                    <div class="contenedor">
                        <h3>¿Qué desea hacer?</h3>
                        <a href="addlote.php">Agregar</a>
                        <!-- <a href="updatelote.php">Modificar</a>
                        <a href="deletelote.php">Eliminar</a> -->
                    </div>
                </section>

    </section>

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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>
    <script src="owl/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <script>

        $(document).ready(function () {

            $(window).scroll(function () {
                scroll = $(window).scrollTop();
                if (scroll > 100) {
                    $('.menu').css({ "position": "fixed" });
                    $('.menu').css({ "width": "100%" });
                    $('.menu').css({ "top": "0" });
                    $('.menu').css({ "background": "#370bd4cb" });
                    $('.menu a').css({ "color": "#fff" });
                    $('.logo').css({ "color": "#fff" });
                    // $('.menu').css({ "box-shadow": "rgba(0, 0, 0, 0.22) 6px 1px 1px" });
                    $('.menu').css({ "z-index": "100" });
                } else {
                    $('.menu').css({ "position": "relative" });
                    $('.menu').css({ "background": "transparent" });
                    $('.menu').css({ "box-shadow": "0 0 0" });
                    $('.menu a').css({ "color": "#fff" });
                    $('.logo').css({ "color": "#fff" });
                }
            })

            $('.menu-icon').click(function () {
                $('header nav').slideToggle();
            })

        })

    </script>


</body>

</html>