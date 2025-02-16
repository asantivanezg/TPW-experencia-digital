<?php

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Experiencia Digital</title>
    <link rel="icon" href="images/logo-web-50x50px.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style/Whatsapp.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="flexsliderpersonal.css" type="text/css">
    <!--
-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/estilos.css">

    <link rel="shorcut icon" href="imagenes/lol.jpeg">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script
    async>(function (w, d) { var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://app.bluecaribu.com/conversion/integration/9506909c8e917693935ec38034112426"); h.appendChild(s); })(window, document);</script>

</head>

<body>
    <header>
        <div class="container">
            <div class="float-left">
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



    <!--Slider de Tarjetas-->
    <div class="tarjetas bg-ligth mt-3 p-3">
        <h2 align="center" class="text-white mt-2 text-dark p-2">NUESTROS ACCESORIOS</h2>
        <div class="container-fluid" style="text-align:center">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div id="inam" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="card" style="width:250px; margin: auto;">
                                                <img src="img/accesorio 1.png" alt="" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">ACCESORIOS PARA ESTUDIOS</h5>
                                                    <p class="card-text">Desde S/65.00</p>
                                                    <button type="button" class="btn btn-warning">Mas Info..</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-4">
                                            <div class="card" style="width:250px; margin: auto;">
                                                <img src="img/accesorio 2.png" alt="" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">ACCESORIOS PARA OFICINAS</h5>
                                                    <p class="card-text">Desde S/55.00</p>
                                                    <button type="button" class="btn btn-warning">Mas Info..</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-4">
                                            <div class="card" style="width:250px; margin: auto;">
                                                <img src="img/accesorio 3.png" alt="" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">ACCESORIOS PARA DISEÑOS</h5>
                                                    <p class="card-text">Desde S/55.00</p>
                                                    <button type="button" class="btn btn-warning">Mas Info..</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                   
                        </div>

                        <a href="#inam" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>

                        <a href="#inam" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tarjetas bg-ligth mt-3 p-3">
        <h2 align="center" class="text-white mt-2 text-dark p-2">NUESTROS SERVICIOS</h2>
        <div class="container-fluid" style="text-align:center">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div id="inam" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="card" style="width:250px; margin: auto;">
                                                <img src="img/diseño 1.png" alt="" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">Diseño Web</h5>
                                                    <p class="card-text">Desde S/65.00</p>
                                                    <button type="button" class="btn btn-warning">Mas Info..</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-4" >
                                            <div class="card" style="width:250px; margin: auto;">
                                                <img src="img/diseño 2.png" alt="" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title" >Actualizacion Software</h5>
                                                    <p class="card-text"  text=" center">Desde S/55.00</p>
                                                    <button type="button" class="btn btn-warning">Mas Info..</button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-lg-4">
                                            <div class="card" style="width:250px; margin: auto;">
                                                <img src="img/diseño 3.png" alt="" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">DISEÑO DE ALBUMS</h5>
                                                    <p class="card-text">Desde S/55.00</p>
                                                    <button type="button" class="btn btn-warning">Mas Info..</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>            
                        </div>

                        <a href="#inam" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>

                        <a href="#inam" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Traslados-->
    <section class="traslados mt-5 pt-2">
        <h2 align="center" class="text-white mt-2 text-dark ">NUEVOS PRODUCTOS</h2>
        <div class="container mt-5 mb-5" style="text-align:center">
            <div class="row mt-5">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <main class="">
                        <img src="img/venta 1.png" alt="">
                        <div class="cont-main border overflow-hidden p-2" id="menu" onClick="cambiarClase()">
                            <h5 class="text-primary text-center">MEMORIAS RAM<br> 2022</h5>
                            <p class="card-text">Desde S/65.00</p>
                            <button type="button" class="btn btn-warning">Mas Info..</button>
                            <hr>
                            <!--<p class="font-weight-bold">Todo incluido</p>-->
                            <p class="text-center">
                               lo ultimo en Memorias ram para la actualizacion de sus servidores.
                            </p>
                            
                        </div>
                    </main>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <main class="">
                        <img src="img/venta 2.png" alt="">
                        <div class="cont-main border overflow-hidden p-2" onClick="cambiarClase2()">
                            <h5 class="text-primary text-center">DISCOS SSD <br> 2022</h5>
                            <p class="card-text">Desde S/150.00</p>
                            <button type="button" class="btn btn-warning">Mas Info..</button>
                            <hr>
                            <!--<p class="font-weight-bold">Todo incluido</p>-->
                            <p class="text-center">
                                lo mas avanzado en SSD para un mayor guardado de informacion.
                            </p>
                        </div>
                    </main>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <main class="">
                        <img src="img/venta 3.png" alt="">
                        <div class="cont-main border overflow-hidden p-2" onClick="cambiarClase3()">
                            <h5 class="text-primary text-center">PROCESADORES<br>2022.</h5>
                            <p class="card-text">Desde S/120.00</p>
                            <button type="button" class="btn btn-warning">Mas Info..</button>
                            <hr>
                            <!--<p class="font-weight-bold">Todo incluido</p>-->
                            <p class="text-center">
                                los procesadores mas actuales para un mejor rendimiento para tu empresa.
                            </p>
                        </div>
                    </main>
                    <br>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <main class="">
                        <img src="img/venta 4.png" alt="">
                        <div class="cont-main border overflow-hidden p-2" onClick="cambiarClase4()">
                            <h5 class="text-primary text-center">TARJETAS GRAFICAS<br> 2022</h5>
                            <p class="card-text">Desde S/350.00</p>
                            <button type="button" class="btn btn-warning">Mas Info..</button>
                            <hr>
                            <!--<p class="font-weight-bold">Todo incluido</p>-->
                            <p class="text-center">
                                Para una mejor transformacion de datos y en alta definicion para sus usuarios .
                            </p>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </section>


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
                    Página desarrollado por el grupo 3
                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
        </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="jquery.flexslider.js"></script>
    <!-- Place in the <head>, after the three links -->
    <script type="text/javascript" charset="utf-8">
        $(window).load(function () {
            $('.flexslider').flexslider({
                touch: true,
                pauseOnAction: false,
                pauseOnHover: false
            });
        });
    </script>


    <script src="js/script.js"> </script>

</body>