<div class="container">
    <div class="jumbotron mt-4">
        <h2 class="display-4">Editar estado</h2>
    </div>

    <?php

    foreach ($estados as $estd) {
    ?>
        <form action="<?php echo getUrl("Estado", "Estado", "postUpdate"); ?>" method="post">
            <div class="row ">
                <div class="form-group col-md-7">
                    <label>Nombre</label>
                    <input type="hidden" name="id_estado" value="<?php echo $estd['id_estado']; ?>">
                    <input type="text" name="desc_estado" class="form-control" value="<?php echo $estd['desc_estado']; ?>">
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