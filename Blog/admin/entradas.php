<h2>Entradas del blog</h2>
<p><a class="btn btn-primary" href="?id=nueva_entrada">Nueva Entrada</a></p>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Fecha</th>
            <th>Autor</th>
            <th>Texto</th>
            <th> </th>
            <th> </th>
        </tr>
        </thead>
        <tbody>
        <td>
            <td>1,001</td>
            <td>Mi primera entrada</td>
            <td>2017-11-16</td>
            <td>Santi</td>
            <td>Bienvenido a mi blog</td>
            <td><a class="btn btn-warning" href="?id=nueva_entrada&entrada=<?= $id ?>">Modificar</a></td>
            <td><a class="btn btn-danger" href="eliminar_entrada.php?entrada=<?= $id ?>" onclick="return confirm('¿Estás seguro?');">Eliminar</a></td>
        </tr>
        </tbody>
    </table>
</div>