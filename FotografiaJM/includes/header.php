<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Fotografía JM</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">FJM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <?php
                if ($_SERVER["PHP_SELF"] == '/holamundo/index.php') {
                    echo "<li class='nav-item active'>";
                }
                else {
                    echo "<li class='nav-item'>";
                }
                ?>
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <?php
                if ($_SERVER["PHP_SELF"] == '/holamundo/galeria.php') {
                    echo "<li class='nav-item active'>";
                }
                else {
                    echo "<li class='nav-item'>";
                }
                ?>
                    <a class="nav-link" href="galeria.php">Galería</a>
                </li>
                <?php
                if ($_SERVER["PHP_SELF"] == '/holamundo/contacto.php') {
                    echo "<li class='nav-item active'>";
                }
                else {
                    echo "<li class='nav-item'>";
                }
                ?>
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0" action="galeria.php" method="get">
                <input class="form-control mr-sm-2" type="text"
                       value="<?php if (isset($busqueda)) echo $busqueda ?>"
                       name="busqueda" placeholder="Búsqueda" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0"
                       type="submit">Buscar</button>
            </form>
        </div>
    </nav>
</header>