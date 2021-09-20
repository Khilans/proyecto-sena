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
            <div class="row">
                <div style="margin: 1em;" class="col-md-6">
                    <input type="submit" value="Eliminar" class="btn btn-outline-danger">
                    <a href="<?php echo getUrl("Programa", "Programa", "consult") ?>"><button type="button" class="btn btn-outline-success">Cancelar</button></a>
                </div>
            </div>
        </form>
</div>
<?php
    }
?>