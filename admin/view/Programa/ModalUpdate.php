<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Editar programa</h4>
    </div>

    <?php
    foreach ($programas as $prog) {
    ?>
        <form action="<?php echo getUrl("Programa", "Programa", "postUpdate"); ?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="form-group col-md-4 mt-4">
                    <label>Id</label>
                    <input type="number" readonly name="id_prog" class="form-control" value="<?php echo $prog['id_prog']; ?>">
                </div>
                <div class=" form-group col-md-4 mt-4">
                    <label>Linea tecnologica</label>
                    <select name="lin_tec_cod" class="form-control">
                        <option value="">Seleccione...</option>
                        <?php
                        foreach ($lineatecnologica as $linea) {
                            if ($linea['lin_tec_cod'] == $prog['lin_tec_cod']) {

                                echo "<option value='" . $linea['lin_tec_cod'] . "'selected>" . $linea['lin_tec_desc'] . "</option>";
                            } else {
                                echo "<option value='" . $linea['lin_tec_cod'] . "'>" . $linea['lin_tec_desc'] . "</option>";
                            }
                        }
                        ?>
                    </Select>
                </div>

                <div class=" form-group col-md-4 mt-4">
                    <label>Nivel</label>
                    <select name="id_prog_niv" class="form-control">
                        <option value="">Seleccione...</option>
                        <?php
                        foreach ($nivel as $niv) {
                            if ($niv['id_prog_niv'] == $prog['id_prog_niv']) {

                                echo "<option value='" . $niv['id_prog_niv'] . "'selected>" . $niv['nom_prog_niv'] . "</option>";
                            } else {
                                echo "<option value='" . $niv['id_prog_niv'] . "'>" . $niv['nom_prog_niv'] . "</option>";
                            }
                        }
                        ?>
                    </Select>
                </div>
                <div class="col-md-4 form-group">
                    <label>Nombre</label>
                    <input type="text" name="nom_prog" class="form-control" value="<?php echo $prog['nom_prog']; ?>">
                </div>
                <div class="col-md-4 form-group">
                    <label>Siglas</label>
                    <input type="text" name="sigla_prog" class="form-control" value="<?php echo $prog['sigla_prog']; ?>">
                </div>
                <div class="col-md-4 form-group">
                    <label>Descripción</label>
                    <input type="text" name="desc_prog" class="form-control" value="<?php echo $prog['desc_prog']; ?>">
                </div>
                <div class="col-md-4 form-group">
                    <label>Duración</label>
                    <input type="text" name="duracion_prog" class="form-control" value="<?php echo $prog['duracion_prog']; ?>">
                </div>
                <div class="col-md-4 form-group">
                    <label>Código</label>
                    <input type="number" name="cod_prog" class="form-control" value="<?php echo $prog['cod_prog']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>.</label>
                    <div id="cambiarImagen">
                        <img class="d-block" id="imagen" src="<?php echo $prog['imag_prog'] ?>" width="50px">
                        <button type="button" id="cambioDeImagen" class="btn btn-outline-secondary mt-2">Cambiar imagen</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Confirmar</button>
        </div>
        </form>
    <?php
    }
    ?>
</div>