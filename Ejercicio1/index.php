<?php
if (isset($_REQUEST["id"]))
    $id = $_REQUEST["id"];
else
    $id = "noticias";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Las Noticias</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>
<br/>
<div class="container">
    <div class="list-group">
        <a href="?id=noticias" class="list-group-item<?php if ($id == "noticias") echo " active"; ?>">Noticias</a>
        <a href="?id=deportes" class="list-group-item<?php if ($id == "deportes") echo " active"; ?>">Deportes</a>
        <a href="?id=television" class="list-group-item<?php if ($id == "television") echo " active"; ?>">Televisión</a>
        <a href="?id=series" class="list-group-item<?php if ($id == "series") echo " active"; ?>">Series</a>
    </div>
    <?php
    if ($id == "")
        include("noticias.php");
    else
        include($id . ".php");
    ?>
</div>
</body>
</html>