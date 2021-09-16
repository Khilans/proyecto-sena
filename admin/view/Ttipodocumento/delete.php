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
                        <input type="hidden" name="cod_tipo_doc" value="<?php echo $tipodocu['cod_tipo_doc']; ?>">
                        <input type="text" readonly name="nom_tipo_doc" value="<?php echo $tipodocu['nom_tipo_doc'] ?>">
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div style="margin: 1em;" class="col-md-4">
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                </div>
            </div><br>
        </form>
    <?php
    }
    ?>
</div>