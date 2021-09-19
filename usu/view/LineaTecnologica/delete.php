<div class="container">
    <div class="jumbotron mt-4">
        <h3 class="display-4">Eliminar línea tecnológica</h3>
    </div>
    <?php
    foreach ($lineatecnologica as $linea) {
    ?>
        <form action="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Línea tecnológica</label>
                    <div>
                        <input type="hidden" name="lin_tec_cod" value="<?php echo $linea['lin_tec_cod']; ?>">
                        <input type="text" readonly name="lin_tec_desc" value="<?php echo $linea['lin_tec_desc'] ?>">
                    </div>
                    <p class="mt-4">¿Está seguro de eliminar esta línea tecnológica?</p>
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
<br>