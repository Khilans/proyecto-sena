<div class="container">
    <div class="jumbotron mt-4">
        <h2 class="display-4">Editar nivel de programa</h2>
    </div>
    <div class="container">
        <?php
        foreach ($nivel as $niv) {
        ?>
            <form action="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "postUpdate"); ?>" method="post">
                <div class="row ">
                    <div class="form-group col-md-7">
                        <label>Nivel</label>
                        <input type="hidden" name="id_prog_niv" value="<?php echo $niv['id_prog_niv']; ?>">
                        <input type="text" name="nom_prog_niv" class="form-control" value="<?php echo $niv['nom_prog_niv']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="submit" value="enviar" class="btn btn-outline-primary">
                      <a href="<?php echo getUrl("ProgramaNivel","ProgramaNivel","consult")?>"> <button type="button" class="btn btn-outline-success">Volver</button></a>
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</div>
<br>