<?php
    if (isset($_REQUEST["id"]))
        $id = $_REQUEST["id"];
    else
        $id = "inicio";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icons/favicon.ico">

    <title>Viajes Montessori</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#fecha" ).datepicker();
        } );
    </script>
    <script src="libs/ckeditor/ckeditor.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">VM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Viajes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proveedores</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="index.php" method="get">
          <input class="form-control mr-sm-2" name="texto" type="text" placeholder="Search" aria-label="Search">
            <input type="hidden" name="id" value="busqueda"/>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <?php
    if ($id != "busqueda") {
    ?>
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Viajes Montessori</h1>
                <p>Agencia de viajes especializada en Programadores</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver todos los viajes &raquo;</a></p>
            </div>
        </div>
    <?php
    }
    ?>

    <div class="container">
        <hr>
        <?php
        include("config/configuracion.php");
        include("include/funciones.php");

        include($id . ".php");
        ?>

      <hr>

      <footer>
        <p>&copy; Viajes Montessori 2017</p>
      </footer>
    </div> <!-- /container -->

  </body>
</html>
