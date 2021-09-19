<div class="jumbotron mt-4">
    <h3 class="display-4">Eliminar resultado</h3>
</div>
<?php
    foreach ($resultados as $res) {
?>
<form action="<?php echo getUrl("ResultadoAp","ResultadoAp","postDelete"); ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="res_apr_cod" value="<?php echo $res['res_apr_cod']; ?>">
            <input type="text" readonly name="res_apr_desc" class="form-control" value="<?php echo $res['res_apr_desc']; ?>"> 
            <p class="mt-4">¿Está seguro de eliminar este resultado?</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Eliminar" class="btn btn-danger">
            <a href="<?php echo getUrl("ResultadoAp","ResultadoAp","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
        </div>
    </div>
</form>
<?php
    }
?>