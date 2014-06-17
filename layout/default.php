<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title><?php echo $title ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
    <!-- Meta Facebook -->
    <meta property="og:url" content="http://backing.com.co/">
    <meta property="og:title" content="Backing - Stands, Eventos, Producción, publicidad BTL..."/>
    <meta property="og:description"
          content="Backing es una agencia BTL en Colombia dedicada al diseño, producción, montaje de stands y eventos corporativos."/>
    <meta property="og:image" content="http://backing.com.co/images/ogimage.jpg"/>


    <link rel="shortcut icon" href="favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700' rel='stylesheet'
          type='text/css'>

    <!-- Estilos -->
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    <!-- Humans -->
    <link type="text/plain" rel="author" href="humans.txt"/>

</head>
<body>
<header>

    <figure><img src="images/logo.png" alt="logo-backing"/></figure>
</header>
<nav>

    <ul id="nav">
        <li><a href="la-agencia" class="<?php if ($url == 'la-agencia'): echo('active'); endif ?>">La agencia</a></li>
        <li><a href="nuestro-trabajo" class="<?php if ($url == 'nuestro-trabajo'): echo('active'); endif ?>"">Nuestro
            Trabajo</a></li>
        <li><a href="clientes" class="<?php if ($url == 'clientes'): echo('active'); endif ?>">Clientes</a></li>
        <li><a href="galeria" class="<?php if ($url == 'galeria'): echo('active'); endif ?>">Galería</a></li>
        <li><a href="contacto" class="<?php if ($url == 'contacto'): echo('active'); endif ?>">Contacto</a></li>
    </ul>
    <ul id="network">
        <li><a href="https://www.facebook.com/Circulart"><span class="icon-facebook"></span></a></li>
        <li><a href="https://twitter.com/Circulart_" class="twitter"><span class="icon-twitter"></span></a></li>
    </ul>
</nav>


<?php include $fileName; ?>

<footer>
    ®Backing - Todos los derechos Reservados - 2014 - Diseño Web:
</footer>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script src="js/script.js"></script>
</body>
</html>