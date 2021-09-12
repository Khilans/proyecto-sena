<div class="container">
    <div class="jumbotron mt-4">
        <h3 class="display-4">Eliminar línea tecnológica</h3>
    </div>
    <?php
    foreach ($rol as $rol) {
    ?>
        <form action="<?php echo getUrl("Trol", "Trol", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Línea tecnológica</label>
                    <div>
                        <input type="hidden" name="cod_rol" value="<?php echo $rol['cod_rol']; ?>">
                        <input type="text" readonly name="desc_rol" value="<?php echo $rol['desc_rol'] ?>">
                    </div>
                    <p class="mt-4">¿Está seguro de eliminar este rol?</p>
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