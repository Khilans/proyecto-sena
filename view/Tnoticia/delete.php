<div class="jumbotron mt-4">
    <h3 class="display-4">Eliminar tipo de noticia</h3>
</div>
<?php
    foreach ($tipo_noticias as $tipo_not) {
?>
<form action="<?php echo getUrl("Tnoticia","Tnoticia","postDelete"); ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="cod_tipo_noti" value="<?php echo $tipo_not['cod_tipo_noti']; ?>">
            <input type="text" readonly name="desc_tipo_noti" class="form-control" value="<?php echo $tipo_not['desc_tipo_noti'] ?>"> 
            <p class="mt-4">¿Esta seguro de eliminar este tipo de noticia?</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </div>
    </div>
</form>
<?php
    }
?>