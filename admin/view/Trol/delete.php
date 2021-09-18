<div class="container">
<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
            <p>EL rol será inhabilitado indefinidamente</p>
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