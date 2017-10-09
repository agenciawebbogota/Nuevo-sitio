
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Contacto - Agencia Web Bogotá</title>
    <meta name="description" content="Agencia Web Bogotá - Contáctenos 316 878 56 01 - 320 867 39 01 - info@agenciawebbogota.com">
    <meta name="viewport" content="width=device-width, initial-scale=0.85">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/styles/css/app.css">
    <style type="text/css">
        .hero {
            background-image: url("assets/images/contacto.jpg");
        }
    </style>
</head>
<body class="further contact">
    <div id="site-content">
<header class="app-header" id="app-header">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo" id="logo">
                <a href="index.php" class="image-logo">
                    <img src="assets/images/logo-agencia-web-bogota.svg" alt="Logo Agencia Web Bogota" title="Agencia Web Bogota" />
                </a>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li>
                        <a>Emprendedores</a>
                        <ul>
                            <li>
                                <a href="diseno-web-para-emprendedores.php">Diseño Web</a>
                            </li>
                            <li>
                                <a href="marketing-digital-para-emprendedores.php">Marketing Digital</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>Empresas</a>
                        <ul>
                            <li>
                                <a href="diseno-web-para-empresas.php">Diseño Web</a>
                            </li>
                            <li>
                                <a href="marketing-digital-para-empresas.php">Marketing Digital</a>
                            </li>
                            <li>
                                <a href="aplicativos-web.php">Aplicativos Web</a>
                            </li>
                            <li>
                                <a href="google-apps.php">Google Apps</a>
                            </li>
                            <li>
                                <a href="posicionamiento-web.php">Posicionamiento</a>
                            </li>
                        </ul>
                    </li>
                    <li style="cursor:pointer;"><a onclick='location.href ="http://academiawebbogota.com/"'>Cursos</a></li>
                    <li style="cursor:pointer;"><a onclick='location.href ="https://agenciawebbogota.com/blog/"'>Blog</a></li>
                    <li class="active"><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<section class="hero sub-header">
    <div class="container inactive">
        <div class="sh-title-wrapper">
            <h1>Contáctanos</h1>
            <p>Tenemos todo preparado para comenzar a trabajar en tu proyecto</p>

        </div>
    </div>
</section>


        <nav class="breadcrumb">
    <div class="container">
        <ul>
            <li class="home"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li><a href="index.php">Inicio</a></li>
        </ul>
    </div>
</nav>
        

        <section class="section primary contact" id="s-contact">
    <div class="container">
                <div class="row contact-widgets">
            <div class="span-4 widget">
                <div class="widget-content">
                    <header>
                        <i class="fa fa-map-marker fa-2x" style="color:#1795c5"></i>
                        <div class="title">
                            <h4>Nuestras Oficinas</h4>
                        </div>
                    </header>
                    <p>
                        Calle 2 No. 91C-85<br />
                      Bogotá, Distrito Especial, 110871<br />
                        Colombia<br />
                    </p>
                </div>
            </div>
            <div class="span-4 widget">
                <div class="widget-content">
                    <header>
                        <i class="fa fa-mobile fa-2x" style="color:#1795c5"></i>
                        <div class="title">
                            <h4>Teléfonos de contacto</h4>
                        </div>
                    </header>
                    <ul>
                        <li>Fijo: 789 20 93</li>
                        <li>Celular: 316 878 56 01</li>
                        <li>Celular: 320 867 39 01</li>
                    </ul>
                </div>
            </div>
            <div class="span-4 widget">
                <div class="widget-content">
                    <header>
                          <i class="fa fa-envelope fa-2x" style="color:#1795c5"></i>
                        <div class="title">
                            <h4>Correos electrónicos</h4>
                        </div>
                    </header>
                    <ul>
                        <li><a href="mailto:info@agenciawebbogota.com">info@agenciawebbogota.com</a></li>
                        <li><a href="mailto:proyectos@agenciawebbogota.com">proyectos@agenciawebbogota.com</a></li>
                        <li><a href="mailto:agenciawebbogota@gmail.com">agenciawebbogota@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="stripes" />
        <form class="h5-valid" id="form-contacto">
            <div style="color:#66BB6A;text-align:center;" id="resultado"><p></p></div>
            <fieldset>
                <div class="form-element">
                    <input type="text" class="box" required name="nombre" id="nombre">
                    <label>Tu Nombre</label>
                </div>
                <div class="form-element">
                    <input type="text" class="box" name="apellido" id="apellido">
                    <label>Tu Apellido</label>
                </div>
                <div class="form-element">
                    <input type="tel" class="box" name="telefono" id="telefono">
                    <label>Teléfono de Contacto</label>
                </div>
                <div class="form-element">
                    <input type="email" class="box" required name="correo" id="correo">
                    <label>Correo Electrónico</label>
                </div>
            </fieldset>
            <div class="form-element">
                <textarea class="box" placeholder="Déjanos tu mensaje" required name="mensaje" id="mensaje"></textarea>
            </div>
            <button type="submit" class="button large full-width brand-1">¡LISTO!</button>
        </form>
    </div>
</section>

<?php
    require_once 'includes/footer.php';
 ?>

 <script type="text/javascript" src="assets/js/contacto.js"></script>
