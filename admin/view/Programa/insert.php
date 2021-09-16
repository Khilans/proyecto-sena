<div class="container">
	<div class="jumbotron">
		<h3 class="display-4">Registrar programa</h3>
	</div>
	<form action="<?php echo getUrl("Programa", "Programa", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">


			<div class="col-md-4 form-group">
				<label>Linea tecnologica</label>
				<select name="lin_tec_cod" class="form-control">
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
				<select name="id_prog_niv" class="form-control">
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
				<input type="text" name="nom_prog" class="form-control" placeholder="Nombre">
			</div>
			<div class="col-md-4 form-group">
				<label>Siglas</label>
				<input type="text" name="sigla_prog" class="form-control" placeholder="Siglas">
			</div>
			<div class="col-md-4 form-group">
				<label>Descripción</label>
				<input type="text" name="desc_prog" class="form-control" placeholder="Descripción">
			</div>
			<div class="col-md-4 form-group">
				<label>Duración</label>
				<input type="text" name="duracion_prog" class="form-control" placeholder="Duración">
			</div>
			<div class="col-md-4 form-group">
				<label>Código</label>
				<input type="number" name="cod_prog" class="form-control" placeholder="código">
			</div>
			<div class="col-md-4">
				<label>Imagen</label>
				<input type="file" name="imag_prog">
			</div>

		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Programa", "Programa", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>


	</form>