<div class="container">
    <div class="jumbotron mt-4">
        <h2 class="display-4">Editar Linea Tecnologica</h2>
    </div>
    <div class="container">
        <?php
        foreach ($lineatecnologica as $linea) {
        ?>
            <form action="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "postUpdate"); ?>" method="post">
                <div class="row ">
                    <div class="form-group col-md-7">
                        <label>Nombre</label>
                        <input type="hidden" name="lin_tec_cod" value="<?php echo $linea['lin_tec_cod']; ?>">
                        <input type="text" name="lin_tec_desc" class="form-control" value="<?php echo $linea['lin_tec_desc']; ?>">
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
<br>