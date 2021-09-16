<div class="jumbotron">
    <h3 class="display-8">Eliminar programa</h3>
</div>
<?php
    foreach ($programas as $prog) {
?>
<form action="<?php echo getUrl("Programa","Programa","postDelete"); ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="id_prog" value="<?php echo $prog['id_prog']; ?>">
            <input type="text" readonly name="nom_prog" class="form-control" value="<?php echo $prog['nom_prog']; ?>"> 
            <p class="mt-4">¿Estás seguro de eliminar este programa?</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Eliminar" class="btn btn-danger">
            <a href="<?php echo getUrl("Programa","Programa","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
        </div>
    </div>
</form>
<?php
    }
?>