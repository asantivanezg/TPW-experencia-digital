<?php

?>
<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="UTF-8">
    <title>Experiencia Digital</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="images/logo-web-50x50px.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
    <script async>
        (function(w, d) {
            var h = d.head || d.getElementsByTagName("head")[0];
            var s = d.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.setAttribute("src", "https://app.bluecaribu.com/conversion/integration/9506909c8e917693935ec38034112426");
            h.appendChild(s);
        })(window, document);
    </script>

</head>

<body>
    <header>
        <!-- el container es la caja del medio que tiene un tamaño maximo pero con se adapta o es responsive se convierte en porcentaje -->
        <div class="container">
            <!-- float-left flotar a la izquierda -->
            <!-- float-right flotar a la derecha -->
            <!-- div.float-left + tab -->
            <div class="float-left">
                <!-- a#logo + tab -->
                <!-- el logo va tener un fondo de imagen por eso no se va agregar la etiqueta img -->
                <a href="index.html" id="logo"></a>
            </div>
            <div class="float-right">
                <nav>
                    <ul>
                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li class="active">
                            <a href="nosotros.php">Nosotros</a>
                        </li>
                        <li>
                            <a href="servicios.php">Servicios</a>
                        </li>
                        <li>
                            <a href="equipo.php">Equipo</a>
                        </li>
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="/src/controllers/producto_controller.php" target="_blank">Intranet</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>

        <section id="resultados">
            <div class="container">
                <h2 class="text-center text-uppercase">Experiencia Digital</h2>

                <ul>
                    <li><strong>RUC:</strong> 20512034617</li><br>
                    <li><strong>Razón Social:</strong> <span>DIGITAL EXPERIENCE SOCIEDAD ANONIMA CERRADA</span>
                    </li> <br>
                    <li><strong>Nombre Comercial:</strong> Experiencia Digital</li> <br>
                    <li><strong>Tipo Empresa:</strong> Sociedad Anonima Cerrada</li> <br>
                    <li><strong>Condición:</strong> Activo</li> <br>
                    <li><strong>Fecha Inicio Actividades:</strong> 16 / Abril / 2022</li> <br>
                    <li><strong>Actividades Comerciales:</strong>
                        <ul>
                            <li>Vta. May. de Otros Productos. </li>
                            <li>Desarrollo de software. </li>
                            <li>Otras Actividades Empresariales Ncp.</li>
                        </ul>
                    </li> <br>
                    <li><strong>CIIU:</strong> 51906</li> <br>
                </ul>
                <hr>
                <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <ul>
                        <li class='exp'><strong>Dirección Legal:</strong> <span Itemprop="Streetaddress">Av. Inca
                                Garcilazo de la Vega Nro. 1132 Int. Sot1 (Jr. Aciscio Villaran Nro 331 Lima)</span></li> <br>
                        <li class='exp'><strong>Distrito / Ciudad:</strong> Lima</li> <br>
                        <li class='exp'><strong>Departamento:</strong> <span Itemprop="Addresslocality">Lima,
                                Perú</span></li> <br>
                    </ul>
                </div>
        </section>
    </main>
    <footer>
        <div id="footer-arriba">
            <div class="container">
                <div class="float-left">
                    <ul>
                    <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li class="active">
                            <a href="nosotros.php">Nosotros</a>
                        </li>
                        <li>
                            <a href="servicios.php">Servicios</a>
                        </li>
                        <li>
                            <a href="equipo.php">Equipo</a>
                        </li>
                        <li>
                            <a href="SistemaLogin.html">Login</a>
                        </li>
                        <li>
                            <a href="/src/views/intranet/intranet.php" target="_blank">Intranet</a>
                        </li>
                    </ul>
                </div>
                <div class="float-right">
                    <ul class="redes-sociales">
                        <li>
                            <a href="https://www.facebook.com/Experiencia-Digital-104907572255725">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ExperienciaDig5">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/experiencia-digital-0b0479243/">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://myaccount.google.com/u/1/">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/u19202758/_saved/">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/experienciadigital97/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="footer-abajo">
            <div class="container">
                <div id="copyright" class="text-center">
                    Página desarrollado por el grupo 3 - 2022 Todos los derechos Reservados
                </div>
            </div>
        </div>
    </footer>
</body>

</html>