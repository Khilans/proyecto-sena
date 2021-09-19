<div class="container">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-center">ELIMINAR LÍNEA TECNOLÓGICA</h4>
        <p class="text-center" >! La línea tecnológica será inhabilitada ¡</p>
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
                    <p class="mt-4">¿Está seguro de la acción?</p>
                </div>
            </div>
            <div class="row">
                <div style="margin: 1em;" class="col-md-6">
                    <input type="submit" value="Eliminar" class="btn btn-outline-danger">
                    <a href="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "consult") ?>"> <button type="button" class="btn btn-outline-success">Cancelar</button></a>

                </div>
            </div><br>
        </form>
    <?php
    }
    ?>
</div>