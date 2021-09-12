<div class="container">
    <div class="jumbotron mt-4">
        <h2 class="display-4">Editar Tipodocumento</h2>
    </div>
    <div class="container">
        <?php
        foreach ($tipodocumento as $tipodocu) {
        ?>
            <form action="<?php echo getUrl("Ttipodocumento", "Ttipodocumento", "postUpdate"); ?>" method="post">
                <div class="row ">
                    <div class="form-group col-md-7">
                        <label>Nombre</label>
                        <input type="hidden" name="cod_tipo_doc" value="<?php echo $tipodocu['cod_tipo_doc']; ?>">
                        <input type="text" name="nom_tipo_doc" class="form-control" value="<?php echo $tipodocu['nom_tipo_doc']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="submit" value="enviar" class="btn btn-success">
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</div>