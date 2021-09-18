<div class="jumbotron mt-4">
    <h3 class="display-4">Eliminar Tipo pqrs</h3>
</div>
<?php
    foreach ($Tpqrs as $pqrs) {
?>
<form action="<?php echo getUrl("Tpqrs","Tpqrs","postDelete"); ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="cod_pqrsf_tipo" value="<?php echo $not['cod_pqrsf_tipo']; ?>">
            <input type="text" readonly name="desc_pqrsf_tipo" class="form-control" value="<?php echo $not['desc_pqrsf_tipo']; ?>"> 
            <p class="mt-4">¿Esta seguro de eliminar este pqrs?</p>
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