<?php
if (isset($_REQUEST["entrada"])) {
    $entrada = $_REQUEST["entrada"];

    $sql = "SELECT * FROM entradas WHERE id = ?";
    $db = new Db();
    $resultado = $db->lanzar_consulta($sql, array($entrada));
    $fila = $resultado->fetch_assoc();
}
?>
<h2>Nueva Entrada</h2>
<?php
if (isset($entrada)) {
?>
<form id="alta_entrada" action="modificar_entrada.php" method="post">
<?php
}
else {
?>
<form id="alta_entrada" action="alta_entrada.php" method="post">
<?php
}
?>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" class="form-control"
                   id="titulo" placeholder="Título"
                <?php
                if (isset($entrada)) {
                    echo "value='" . $fila["titulo"] . "'";
                }
                ?>>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="texto">Descripcion</label>
            <textarea name="texto" cols="20" rows="10" class="form-control" id="texto" placeholder="Texto">
                <?php
                if (isset($entrada)) {
                    echo $fila["texto"];
                }
                ?>
            </textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <input type="text" name="etiquetas" size="50" placeholder="Etiquetas (separadas por coma)" class="form-control"/>
        </div>
    </div>
    <?php
    if (isset($entrada)) {
        echo "<input type='hidden' name='id' value='" . $fila["id"] . "'>";
    }
    ?>
    <div class="form-row">
        <button onclick="actualizarCKEditor()" class="btn btn-primary" type="submit">Enviar</button>
    </div>
    <div id="resultado"></div>
</form>
<script>
    CKEDITOR.replace("texto");
</script>