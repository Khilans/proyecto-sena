<div class="container">
<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-center">ELIMINAR NIVEL DE PROGRAMA</h4>
        <p class="text-center" >! El nivel deprograma será inhabilitado ¡</p>
    </div>
    <?php
    foreach ($nivel as $niv) {
    ?>
        <form action="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Nivel</label>
                    <div>
                        <input type="hidden" name="id_prog_niv" class="form-control" value="<?php echo $niv['id_prog_niv']; ?>">
                        <input type="text" readonly name="nom_prog_niv" class="form-control" value="<?php echo $niv['nom_prog_niv'] ?>">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Confirmar</button>
            </div>
        </form>
    <?php
    }
    ?>
</div>
<br>