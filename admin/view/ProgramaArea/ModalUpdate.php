
<div class="container">
<div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Editar Area</h4>
        <p>Por favor llenar los campos con *</p>
    </div>
    <?php
    foreach ($progarea as $prog) {
    ?>
        <form action="<?php echo getUrl("ProgramaArea", "ProgramaArea", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">

			<div class="col-md-4 form-group">
				<label>Descripción area</label>
				<input value="<?php echo $prog['prog_area'] ?>" required="required" type="text" name="prog_area_desc" class="form-control" placeholder="Descripción">
			</div>

			<div class=" form-group col-md-4 mt-4">
                    <label>Linea tecnologica*</label>
                    <select  required="required"  name="lin_tec_cod" class="form-control">
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
		</div>
		<div class="row">
			<div style="margin: 1em;" class="col-md-6">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("ProgramaArea", "ProgramaArea", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>
	</form>

    <?php

    }
    ?>
</div>