<div class="container">
<div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Editar oferta</h4>
                <p>Los dartos con * son obligatorios</p>
    </div>
    <?php
    foreach ($oferta as $ofer) {
    ?>
        <form action="<?php echo getUrl("Oferta", "Oferta", "postUpdate"); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Nombre oferta*</label>
                    <input type="hidden" readonly name="id_oferta" class="form-control" value="<?php echo $ofer['id_oferta']; ?>">
                    <input  id="contact_form_message" required="required" data-error="Complete este campo." type="text" name="nom_oferta" class="form-control" placeholder="Nombre" value="<?php echo $ofer['nom_oferta']; ?>">
                </div>
                <div class="col-md-6 form-group">
                    <label>Descripción oferta*</label>
                <textarea  id="contact_form_message" required="required" data-error="Complete este campo." name="desc_oferta" rows="1" cols="30" placeholder="Descripción" value="#"><?php echo $ofer['desc_oferta']; ?></textarea>
                </div>
                <div class="col-md-6 form-group">
                    <label>Cupos disponibles*</label>
                    <input  id="contact_form_message" required="required" data-error="Complete este campo." type="number" name="cupos_oferta" class="form-control"  value="<?php echo $ofer['cupos_oferta']; ?>">
                </div>
                <div class="col-md-6 form-group">
                    <label>Fecha final</label>
                    <input   id="contact_form_message" required="required" data-error="Complete este campo." type="date" name="fech_fin_oferta" class="form-control" placeholder="Fecha final" value="<?php echo $ofer['fech_fin_oferta']; ?>">
                </div>

                <div class=" form-group col-md-6">
                    <label>Estado*</label>
                    <select id="contact_form_message" required="required" data-error="Complete este campo." name="id_estado" class="form-control">
                        <option   value="">Seleccione...</option>
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
                <div class="form-group col-md-6">
                    <label>Imagen</label>
                    <div id="cambiarImagenOf">
                        <img class="d-block" id="imagenOf" src="<?php echo $ofer['imag_oferta'] ?>" width="50px">
                        <button type="button" id="cambioDeImagenOf" class="btn btn-outline-secondary mt-2">Cambiar imagen</button>
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
<br>