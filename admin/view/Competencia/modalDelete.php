<div class="container">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
        <p>La competencia será inhabilitada</p>
    </div>
    <?php
    foreach ($competencia as $comp) {
    ?>
        <form action="<?php echo getUrl("Competencia", "Competencia", "postDelete"); ?>" method="post">

            <div style="margin: 1em;" class="row">
                <div class="form-group col-md-4">
                    <label>Nombre</label>
                    <input type="hidden" name="id_competencia" value="<?php echo $comp['id_competencia']; ?>">
                    <input type="text" readonly name="desc_competencia" class="form-control" value="<?php echo $comp['desc_competencia']; ?>">

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Confirmar</button>
            </div>
        </form>
</div>
<?php
    }
?>