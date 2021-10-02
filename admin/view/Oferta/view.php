<div class="container">
    <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
            <p>La oferta será habilitada, los usuarios podrán interactuar con ella.</p>
    </div>        
    <?php
        foreach ($oferta as $ofer) {
    ?>
    <form action="<?php echo getUrl("Oferta","Oferta","postView"); ?>" method="post">

        <div  class="row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="hidden" name="id_oferta" class="form-control" value="<?php echo $ofer['id_oferta']; ?>">
                <textarea name="nom_oferta" rows="1" cols="50"  value="#"><?php echo $ofer['nom_oferta']; ?></textarea>
            </div>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Confirmar</button>
            </div>
        </div>
    </form>
</div>
<?php
    }
?>