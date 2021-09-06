<div class="container">
    <div class="jumbotron mt-4">
        <h3 class="display-4">Eliminar oferta</h3>
    </div>
    <?php
    foreach ($oferta as $ofer) {
    ?>
        <form action="<?php echo getUrl("Oferta", "Oferta", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Nombre</label>
                    <input type="hidden" name="id_oferta" value="<?php echo $ofer['id_oferta']; ?>">
                    <input type="text" readonly name="desc_oferta" class="form-control" value="<?php echo $ofer['desc_oferta']; ?>">
                    <p class="mt-4">¿Esta seguro de eliminar esta oferta?</p>
                </div>
            </div>
         
            <div class="row">
                <div class="col-md-4">
                    <input type="submit" value="Eliminar" class="btn btn-success">
                    <a href="<?php echo getUrl("Oferta", "Oferta", "consult"); ?>"><button type="button" class="btn btn-primary">Cancelar</button></a>
                </div>
            </div>
        </form>

    <?php
    }
    ?>
</div>
<br>