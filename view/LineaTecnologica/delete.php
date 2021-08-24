<div class="jumbotron mt-4">
    <h3 class="display-4">Eliminar lineatecnologica</h3>
</div>

<form action="<?php echo getUrl("LineaTecnologica","LineaTecnologica","postDelete"); ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="lin_tec_cod" value="<?php echo $linea['lin_tec_cod']; ?>">
            <input type="text" readonly name="lin_tec_desc" value="<?php echo $linea['lin_tec_desc']; ?> "> 
            <p class="mt-4">¿Esta seguro de eliminar esta linea tecnologica?</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </div>
    </div>
</form>