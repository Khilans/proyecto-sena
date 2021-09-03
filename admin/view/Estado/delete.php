<div class="jumbotron mt-4">
    <h3 class="display-4">Eliminar estado</h3>
</div>
<?php
    foreach ($estados as $estd) {
?>
<form action="<?php echo getUrl("Estado","Estado","postDelete"); ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="id_estado" value="<?php echo $estd['id_estado']; ?>">
            <input type="text" readonly name="desc_estado" class="form-control" value="<?php echo $estd['desc_estado'] ?>"> 
            <p class="mt-4">¿Esta seguro de eliminar este estado?</p>
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