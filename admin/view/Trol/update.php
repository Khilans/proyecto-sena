<div class="container">
<div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Editar rol</h4>
                
    </div>
    <div class="container">
        <?php
        foreach ($rol as $rol) {
        ?>
            <form action="<?php echo getUrl("Trol", "Trol", "postUpdate"); ?>" method="post">
                <div class="row ">
                    <div class="form-group col-md-7">
                        <label>Nombre</label>
                        <input type="hidden" name="cod_rol" value="<?php echo $rol['cod_rol']; ?>">
                        <input type="text" name="desc_rol" class="form-control" value="<?php echo $rol['desc_rol']; ?>">
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
</div>