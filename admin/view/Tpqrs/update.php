<div class="container">
    <div class="jumbotron mt-4">
        <h2 class="display-4">Editar Linea Tecnologica</h2>
    </div>
    <div class="container">
        <?php
        foreach ($Tpqrs as $pqrs) {
        ?>
            <form action="<?php echo getUrl("Tpqrs", "Tpqrs", "postUpdate"); ?>" method="post">
                <div class="row ">
                    <div class="form-group col-md-7">
                        <label>Nombre</label>
                        <input type="hidden" name="cod_pqrsf_tipo" value="<?php echo $rol['cod_pqrsf_tipo']; ?>">
                        <input type="text" name="desc_pqrsf_tipo" class="form-control" value="<?php echo $rol['desc_pqrsf_tipo']; ?>">
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