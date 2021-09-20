<div class="container">
<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
            <p>EL tipo de documento será inhabilitado indefinidamente</p>
    </div>
    <?php
    foreach ($tipodocumento as $tipodocu) {
    ?>
        <form action="<?php echo getUrl("Ttipodocumento", "Ttipodocumento", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Línea tecnológica</label>
                    <div>
                        <input type="hidden" name="cod_tipo_doc"  class="form-control" value="<?php echo $tipodocu['cod_tipo_doc']; ?>">
                        <input type="text" readonly name="nom_tipo_doc"  class="form-control" value="<?php echo $tipodocu['nom_tipo_doc'] ?>">
                    </div>
                    
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
</div>