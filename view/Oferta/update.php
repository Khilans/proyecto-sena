<div class="container">
    <div class="jumbotron mt-4">
        <h2 class="display-4">Editar oferta</h2>
    </div>
    <?php
    foreach ($oferta as $ofer) {
    ?>
        <form action="<?php echo getUrl("Oferta", "Oferta", "postUpdate"); ?>" method="post">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label>Descripción oferta</label>
                    <input value="<?php echo $ofer['id_oferta'] ?>" type="hidden" name="id_oferta">
                    <input value="<?php echo $ofer['desc_oferta'] ?>" type="text" name="desc_oferta" class="form-control" placeholder="Descripción">
            

                </div>

                <div class="col-md-4 form-group">
                    <label>Fecha inicio</label>
                    <input value="<?php echo $ofer['fech_ini_oferta'] ?>" type="date" name="fech_ini_oferta" class="form-control" placeholder="Fecha inicio">
                </div>
                <div class="col-md-4 form-group">
                    <label>Fecha final</label>
                    <input  value="<?php echo $ofer['fech_fin_oferta'] ?>" type="date" name="fech_fin_oferta" class="form-control" placeholder="Fecha final">
                </div>

                <div class=" form-group col-md-4 mt-4">
                    <label>Estado</label>
                    <select name="id_estado" class="form-control">
                        <option value="">Seleccione...</option>
                        <?php
                        foreach ($estados as $estd) {
                            if ($estd['id_estado'] == $ofer['id_estado']) {

                                echo "<option value='" . $estd['id_estado'] . "'selected>" . $estd['desc_estado'] . "</option>";
                            } else {
                                echo "<option value='" . $estd['id_estado'] . "'>" . $estd['desc_estado'] . "</option>";
                            }
                        }
                        ?>
                    </Select>
                </div>
                <div class="col-md-8">
                    <label>.</label>
                    <div id="cambiarImagen">
                        <img class="d-block" id="imagen" src="<?php echo $ofer['imag_oferta'] ?>" width="50px">
                        <button type="button" id="cambioDeImagen" class="btn btn-outline-secondary mt-2">Cambiar imagen</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <input type="submit" value="Enviar" class="btn btn-outline-success">
                    <a href="<?php echo getUrl("Oferta", "Oferta", "consult"); ?>"><button type="button" class="btn btn-outline-primary">Volver</button></a>
                </div>
            </div>
        </form>

    <?php
    }
    ?>
</div>
<br>