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
                <div class="row">
                    <div style="margin:1em;" class="col-md-4">
                        <input type="submit" value="enviar" class="btn btn-success">
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</div>