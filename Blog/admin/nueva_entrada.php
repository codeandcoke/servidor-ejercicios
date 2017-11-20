<h2>Nueva Entrada</h2>
<form action="alta_entrada.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Título">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="texto">Descripcion</label>
            <textarea name="texto" cols="20" rows="10" class="form-control" id="texto" placeholder="Texto"></textarea>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
<script>
    CKEDITOR.replace("texto");
</script>