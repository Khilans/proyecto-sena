<div class="jumbotron mt-4">
    <h3 class="display-4">Eliminar noticia</h3>
</div>
<?php
    foreach ($noticias as $not) {
?>
<form action="<?php echo getUrl("Noticia","Noticia","postDelete"); ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="cod_noticia" value="<?php echo $not['cod_noticia']; ?>">
            <input type="text" readonly name="titulo_noticia" class="form-control" value="<?php echo $not['titulo_noticia']; ?>"> 
            <p class="mt-4">¿Esta seguro de eliminar esta noticia?</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Eliminar" class="btn btn-danger">
            <a href="<?php echo getUrl("Noticia","Noticia","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
        </div>
    </div>
</form>
<?php
    }
?>