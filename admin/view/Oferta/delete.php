<div class="container">
<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
            <p>La oferta será inhabilitada indefinidamente</p>
    </div>
    <?php
    foreach ($oferta as $ofer) {
    ?>
        <form action="<?php echo getUrl("Oferta", "Oferta", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Nombre</label>
                    <input type="hidden" name="id_oferta" value="<?php echo $ofer['id_oferta']; ?>">
                    <input type="text" readonly name="nom_oferta" class="form-control" value="<?php echo $ofer['nom_oferta']; ?>">
                </div>
            </div>
         
            <div class="row">
                <div style="margin: 1em;" class="col-md-6">
                    <input type="submit" value="Eliminar" class="btn btn-success">
                    <a href="<?php echo getUrl("Oferta", "Oferta", "consult"); ?>"><button type="button" class="btn btn-primary">Cancelar</button></a>
                </div>
            </div>
        </form>

    <?php
    }
    ?>
</div>