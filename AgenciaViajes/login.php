<?php
if (isset($_REQUEST["mensaje"]))
    $mensaje = $_REQUEST["mensaje"];
else
    $mensaje = "";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="check_login.php" method="post">
        <h2 class="form-signin-heading">Inicia sesión</h2>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="contrasena" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
        <?php
        if ($mensaje != "") {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $mensaje ?>
            </div>
        <?php
        }
        ?>
    </div> <!-- /container -->
  </body>
</html>
