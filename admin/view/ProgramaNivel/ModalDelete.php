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
                        <input type="hidden" name="id_prog_niv" value="<?php echo $niv['id_prog_niv']; ?>">
                        <input type="text" readonly name="nom_prog_niv" value="<?php echo $niv['nom_prog_niv'] ?>">
                    </div>
                    <p class="mt-4">¿Está seguro de eliminar este nivel de programas?</p>
                </div>
            </div>
            <div class="row">
                <div style="margin: 1em;" class="col-md-6">
                    <input type="submit" value="Eliminar" class="btn btn-outline-danger">
                    <a href="<?php echo getUrl("ProgramaNivel","ProgramaNivel","consult") ?>"><button type="button" class="btn btn-outline-success">Cancelar</button></a>
                </div>
            </div><br>
        </form>
    <?php
    }
    ?>
</div>
<br>