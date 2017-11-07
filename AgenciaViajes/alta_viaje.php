<form action="nuevo_viaje.php" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="inputEmail4" placeholder="Nombre">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputPassword4">Descripcion</label>
            <textarea name="descripcion" cols="20" rows="10" class="form-control" id="descripcion" placeholder="Descripcion"></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress">Foto 1</label>
            <input type="file" name="foto1" class="form-control" id="inputAddress" placeholder="Foto 1">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress2">Foto 2</label>
            <input type="file" name="foto2" class="form-control" id="inputAddress2" placeholder="Foto 2">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="fecha">Fecha</label>
            <input type="text" name="fecha" placeholder="Fecha" class="form-control" id="fecha">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Duración</label>
            <input type="text" name="duracion" placeholder="Duración" class="form-control"/>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Precio</label>
            <input type="text" name="precio" placeholder="Precio" class="form-control"/>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputZip">Disponible</label>
            <input type="checkbox" name="disponible" placeholder="Disponible" class="form-control" id="inputZip">
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Destacado</label>
            <input type="checkbox" name="destacado" placeholder="Destacado" class="form-control" id="inputZip">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script>
    CKEDITOR.replace("descripcion");
</script>
