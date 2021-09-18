<<<<<<< HEAD
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
=======
<div class="container">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
        <p>El tipo de pqrsf será inhabilitada indefinidamente</p>
    </div>
    <?php
        foreach ($Tipo_pqrs as $Tpq) {
    ?>
    <form action="<?php echo getUrl("Tpqrs","Tpqrs","postDelete"); ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="hidden" name="cod_pqrsf_tipo" value="<?php echo $Tpq['cod_pqrsf_tipo']; ?>">
                <input type="text" readonly name="desc_pqrsf_tipo" class="form-control" value="<?php echo $Tpq['desc_pqrsf_tipo'] ?>"> 
                
            </div>
        </div>
        <div class="row">
            <div style="margin: 1em;" class="col-md-6">
                <input type="submit" value="Eliminar" class="btn btn-danger">
                <a href="<?php echo getUrl("Tpqrs","Tpqrs","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</dvi>  
>>>>>>> 9aecbc786d905ed820fa5b7de7ce1093466331f8
