<div class="container">
    <div class="jumbotron">
        <h2 class="display-8">Editar oferta</h2>
    </div>
    <?php
    foreach ($oferta as $ofer) {
    ?>
        <form action="<?php echo getUrl("Oferta", "Oferta", "postUpdate"); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label>Id</label>
                    <input type="number" readonly name="id_oferta" class="form-control" value="<?php echo $ofer['id_oferta']; ?>">
                </div>
                <div class="col-md-4 form-group">
                    <label>Descripción oferta</label>
                    <input type="text" name="desc_oferta" class="form-control" placeholder="Descripción" value="<?php echo $ofer['desc_oferta']; ?>">
                </div>

                <div class="col-md-4 form-group">
                    <label>Fecha inicio</label>
                    <input type="date" name="fech_ini_oferta" class="form-control" placeholder="Fecha inicio" value="<?php echo $ofer['fech_ini_oferta']; ?>">
                </div>
                <div class="col-md-4 form-group">
                    <label>Fecha final</label>
                    <input type="date" name="fech_fin_oferta" class="form-control" placeholder="Fecha final" value="<?php echo $ofer['fech_fin_oferta']; ?>">
                </div>

                <div class=" form-group col-md-4">
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
                <div class="form-group col-md-4">
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