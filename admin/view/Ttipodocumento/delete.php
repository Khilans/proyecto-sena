<div class="container">
    <div class="jumbotron mt-4">
        <h3 class="display-4">Eliminar documento</h3>
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
                    <p class="mt-4">¿Está seguro de eliminar este tipodocu?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                </div>
            </div><br>
        </form>
    <?php
    }
    ?>
</div>