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
        <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Confirmar</button>
            </div>
    </form>
    <?php
        }
    ?>
</dvi>  
