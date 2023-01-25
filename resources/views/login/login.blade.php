<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <meta name="description" content="">
        <link rel="shortcut icon" href="img/logo.png" type="image/png">
        <link rel="stylesheet" type="text/css"  href="/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/fonts/font-awesome/css/font-awesome.css">

        <!--Links de la OnePage-->
        <link rel="stylesheet" type="text/css"  href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/default.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="../js/modernizr.custom.js"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- NavBar-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only"></span> 
            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="index.html"><i class=""></i> Purificadora La Inmaculada</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#page-top" class="page-scroll">Home</a></li>
                <li><a href="#about" class="page-scroll">Acerca de</a></li>
                <li><a href="#portfolio" class="page-scroll">Catalogo de productos</a></li>
                <li><a href="#contact" class="page-scroll">Contacto</a></li>
                <li><a href="login.html" >Inicio de Sesion</a></li>
            </ul>
        </div>
    </div>
</nav>

<header id="header">
    <div class="intro">
        <div class="container">
            <div class="row">
            <div class="intro-text">
            <h1>Purificadora La Inmaculada</h1>
                </div>
            </div>
        </div>
    </div>
</header>|

<main>
    <form action="validate.php" method="POST">
        <div class="imgcontainer">
            <img src="img/user.jpg" alt="User" class="user" width="200" height="200">
        </div>

        <div class="container">
            <label><b>Usuario</b></label>
            <input type="text" placeholder="Ingresa Usuario" name="username" required>

            <label><b>Contraseña</b></label>
            <input type="password" placeholder="Ingresa Contraseña" name="password" required>

            <button type="submit" name="submit">Acceder</button>
            <input type="checkbox" checked="checked"> Recuerdame
            <br><a href="RegisterNew.html">registrarse</a>
        </div>
    </form>
</main>

<div id="footer">
    <div class="container text-center">
        <div class="fnav">
            <p>Copyright &copy; 2022 La Inmaculada Purificadora. Desarollado por <a href="" rel="nofollow">IguanoSolutions</a>.</p>
        </div>
    </div>
</div>
<!-- Querys -->
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
    <script type="text/javascript" src="js/bootstrap.js"></script> 
    <script type="text/javascript" src="js/SmoothScroll.js"></script> 
    <script type="text/javascript" src="js/nivo-lightbox.js"></script> 
    <script type="text/javascript" src="js/jquery.isotope.js"></script> 
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
    <script type="text/javascript" src="js/contact_me.js"></script> 
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>