<?php
if (!isset($_REQUEST["id"]))
    $id = "inicio";
else
    $id = $_REQUEST["id"];
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Mi blog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
</head>

<body>

<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                <a class="nav-link active" href="index.php">Inicio</a>
                <a class="nav-link" href="#"></a>
                <a class="nav-link" href="#"></a>
                <a class="nav-link" href="#"></a>
                <a class="nav-link" href="#"></a>
            </nav>
        </div>
    </div>

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Mi blog</h1>
            <p class="lead blog-description">Este es mi blog</p>
        </div>
    </div>
</header>

<main role="main" class="container">

    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php
            include("config/db.php");
            include("include/funciones.php");
            include ($id . ".php");
            ?>
        </div><!-- /.blog-main -->

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Acerca de</h4>
                <p>Este es el mejor blog del mundo.</p>
            </div>
            <div class="sidebar-module">
                <h4>Etiquetas</h4>
                <ol class="list-unstyled">
                    <?php
                    $sql = "SELECT COUNT(*) AS cantidad, etiqueta " .
                        "FROM etiquetas GROUP BY etiqueta";
                    $resultado = $db->lanzar_consulta($sql);
                    $db->desconectar();
                    while ($fila = $resultado->fetch_assoc()) {
                        ?>
                        <li><a href="?id=etiqueta&nombre=<?= $fila["etiqueta"] ?>">
                                <?= $fila["etiqueta"] ?> (<?= $fila["cantidad"] ?>)
                            </a></li>
                    <?php
                    }
                    ?>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Enlaces</h4>
                <ol class="list-unstyled">
                    <li><a href="http://servidor.codeandcoke.com">Apuntes</a></li>
                    <li><a href="http://www.google.com">Google</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
    <p>Plantilla de <a href="https://getbootstrap.com/">Bootstrap</a> por <a href="https://twitter.com/mdo">@mdo</a>.
    </p>
    <p>
        <a href="index.php">Ir al principio</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>
</body>
</html>
