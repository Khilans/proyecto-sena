<div class="container">
    <div class="alert-success" role="alert">
        <h4 class="alert text-center">EDITAR NIVEL DE PROGRAMA</h4>
    </div>
    <div class="container">
        <?php
        foreach ($nivel as $niv) {
        ?>
            <form action="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "postUpdate"); ?>" method="post">
                <div class="row ">
                    <div class="form-group col-md-6">
                        <label>Nivel</label>
                        <input type="hidden" name="id_prog_niv" value="<?php echo $niv['id_prog_niv']; ?>">
                        <input type="text" name="nom_prog_niv" class="form-control" value="<?php echo $niv['nom_prog_niv']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div style="margin: 1em;" class="col-md-6">
                        <input type="submit" value="enviar" class="btn btn-outline-primary">
                        <a href="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "consult") ?>"> <button type="button" class="btn btn-outline-success">Cancelar</button></a>
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</div>
<br>