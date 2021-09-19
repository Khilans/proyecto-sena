<div class="container">
	<div class="jumbotron">
		<h3 class="display-4">Registrar área</h3>
	</div>
	<form action="<?php echo getUrl("ProgramaArea", "ProgramaArea", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 form-group">
				<label>Descripción</label>
				<input type="text" name="prog_area_desc" class="form-control" placeholder="Descripción">
</div>
		
		<div class=" col-md-4 form-group">
				<label>Línea tecnológica</label>
				<select name="lin_tec_cod" class="form-control">
					<option value="">Seleccione...</option>

					<?php
					foreach ($lineatecnologica as $linea) {
						echo "<option value='" . $linea['lin_tec_cod'] . "'>" . $linea['lin_tec_desc'] . "</option>";
					}
					?>
				</select>
			</div>

		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("ProgramaArea", "ProgramaArea", "consult"); ?>"><button type="button" class="btn btn-outline-primary">Volver</button></a>
			</div>
		</div>


	</form>
	<br>