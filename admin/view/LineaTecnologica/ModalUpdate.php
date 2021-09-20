<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="text-center">Editar Línea Tecnológica</h4>
    </div>
    <?php
    foreach ($lineatecnologica as $linea) {
    ?>
        <form action="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "postUpdate"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Nombre</label>
                    <input type="hidden" name="lin_tec_cod" value="<?php echo $linea['lin_tec_cod']; ?>">
                    <input type="text" name="lin_tec_desc" class="form-control" value="<?php echo $linea['lin_tec_desc']; ?>">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Confirmar</button>
        </div>
        </form>
    <?php
    }
    ?>
</div>