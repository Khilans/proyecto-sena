<div class="container">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-center">ELIMINAR PROGRAMA</h4>
        <p>El programa será inhabilitado</p>
    </div>
    <?php
    foreach ($programas as $prog) {
    ?>
        <form action="<?php echo getUrl("Programa", "Programa", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Nombre</label>
                    <input type="hidden" name="id_prog" value="<?php echo $prog['id_prog']; ?>">
                    <input type="text" readonly name="nom_prog" class="form-control" value="<?php echo $prog['nom_prog']; ?>">
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