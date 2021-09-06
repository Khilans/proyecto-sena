<div class="container">
    <div class="jumbotron mt-4">
        <h3 class="display-4">Eliminar el nivel</h3>
    </div>
    <?php
    foreach ($nivel as $niv) {
    ?>
        <form action="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Nivel</label>
                    <div>
                        <input type="hidden" name="id_prog_niv" value="<?php echo $niv['id_prog_niv']; ?>">
                        <input type="text" readonly name="nom_prog_niv" value="<?php echo $niv['nom_prog_niv'] ?>">
                    </div>
                    <p class="mt-4">¿Está seguro de eliminar este nivel de programas?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                    <a href="<?php echo getUrl("ProgramaNivel","ProgramaNivel","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
                </div>
            </div><br>
        </form>
    <?php
    }
    ?>
</div>
<br>