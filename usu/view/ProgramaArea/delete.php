<div class="container">
<div class="jumbotron mt-4">
    <h3 class="display-4">Eliminar Área</h3>
</div>
<?php
    foreach ($progarea as $prog) {
?>
<form action="<?php echo getUrl("ProgramaArea","ProgramaArea","postDelete"); ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="prog_area_cod" value="<?php echo $prog['prog_area_cod']; ?>">
            <input type="text" readonly name="prog_area_desc" class="form-control" value="<?php echo $prog['prog_area_desc']; ?>"> 
            <p class="mt-4">¿Esta seguro de eliminar esta área?</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Eliminar" class="btn btn-outline-danger">
            <a href="<?php echo getUrl("ProgramaArea","ProgramaArea","consult"); ?>"><button type="button" class="btn btn-outline-primary">cancelar</button></a>
        </div>
    </div>
</form>
<?php
    }
?>
</div>
<br>