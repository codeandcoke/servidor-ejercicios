<h2>Entradas del blog</h2>
<p><a class="btn btn-primary" href="?id=nueva_entrada">Nueva Entrada</a></p>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Fecha</th>
            <th>Texto</th>
            <th> </th>
            <th> </th>
        </tr>
        </thead>
        <tbody>
        <?php
        $db = new Db();
        $sql = "SELECT id, titulo, SUBSTR(texto, 1, 30) AS texto, fecha " .
            "FROM entradas WHERE id_usuario = ? " .
            "ORDER BY fecha DESC";
        $resultado = $db->lanzar_consulta($sql, array($_SESSION["id"]));
        $db->desconectar();
        while ($fila = $resultado->fetch_assoc()) {
            $id = $fila["id"];
            $titulo = $fila["titulo"];
            $texto = $fila["texto"];
            $fecha = $fila["fecha"];
            ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $titulo ?></td>
                <td><?= $fecha ?></td>
                <td><?= $texto ?></td>
                <td><a class="btn btn-warning" href="?id=nueva_entrada&entrada=<?= $id ?>">Modificar</a></td>
                <td><a class="btn btn-danger" href="eliminar_entrada.php?entrada=<?= $id ?>"
                       onclick="return confirm('¿Estás seguro?');">Eliminar</a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>