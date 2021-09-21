<div class="container">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-center">ELIMINAR LÍNEA TECNOLÓGICA</h4>
        <p class="text-center">! La línea tecnológica será inhabilitada ¡</p>
    </div>
    <?php
    foreach ($lineatecnologica as $linea) {
    ?>
        <form action="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Línea tecnológica</label>
                    <div>
                        <input type="hidden" name="lin_tec_cod" class="form-control" value="<?php echo $linea['lin_tec_cod']; ?>">
                        <input type="text" readonly name="lin_tec_desc" class="form-control" value="<?php echo $linea['lin_tec_desc'] ?>">
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