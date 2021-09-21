<div class="container">
	<div class="alert alert-success" role="alert">
		<h4 class="alert-success text-center">Registrar Programa</h4>
		<p>Los campos con * son obligatorios</p>
	</div>
	<form action="<?php echo getUrl("Programa", "Programa", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div style="margin: 1em;" class="row">
			<div class="col-md-4 form-group">
				<label>Linea tecnologica</label>
				<select  required="required"  name="lin_tec_cod" class="form-control">
					<option value="">Seleccione...</option>

					<?php
					foreach ($lineatecnologica as $linea) {
						echo "<option value='" . $linea['lin_tec_cod'] . "'>" . $linea['lin_tec_desc'] . "</option>";
					}
					?>
				</select>
			</div>
			<div class="col-md-4 form-group">
				<label>Nivel</label>
				<select  required="required"  name="id_prog_niv" class="form-control">
					<option value="">Seleccione...</option>

					<?php
					foreach ($nivel as $niv) {
						echo "<option value='" . $niv['id_prog_niv'] . "'>" . $niv['nom_prog_niv'] . "</option>";
					}
					?>
				</select>
			</div>
			<div class="col-md-4 form-group">
				<label>Nombre</label>
				<input  required="required"  type="text" name="nom_prog" class="form-control" placeholder="Nombre">
			</div>
			<div class="col-md-4 form-group">
				<label>Siglas</label>
				<input  required="required"  type="text" name="sigla_prog" class="form-control" placeholder="Siglas">
			</div>
			<div class="col-md-4 form-group">
				<label>Descripción</label>
				<input  required="required"  type="text" name="desc_prog" class="form-control" placeholder="Descripción">
			</div>
			<div class="col-md-4 form-group">
				<label>Duración</label>
				<input  required="required"  type="text" name="duracion_prog" class="form-control" placeholder="Duración">
			</div>
			<div class="col-md-4 form-group">
				<label>Ficha</label>
				<input  required="required"  type="number" name="cod_prog" class="form-control" placeholder="código">
			</div>
			<div class="col-md-4">
				<label>Imagen</label>
				<input  required="required"  type="file" name="imag_prog">
			</div>

		</div>
		<div class="row">
			<div style="margin: 1em;" class="col-md-6">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Programa", "Programa", "consult"); ?>"><button type="button" class="btn btn-primary">Cancelar</button></a>
			</div>
		</div>
	</form>