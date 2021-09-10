<div class="container">
	<div class="jumbotron">
		<h3 class="display-4">Registrar oferta</h3>
	</div>
	<form action="<?php echo getUrl("Oferta", "Oferta", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			
			<div class="col-md-4 form-group">
				<label>Descripción oferta</label>
				<input type="text" name="desc_oferta" class="form-control" placeholder="Descripción">
			</div>

			<div class="col-md-4 form-group">
				<label>Estado</label>
				<select name="id_estado" class="form-control">
					<option value="">Seleccione...</option>

					<?php
					foreach ($estados  as $estd) {
						echo "<option value='" . $estd['id_estado'] . "'>" . $estd['desc_estado'] . "</option>";
					}
					?>
				</select>
			</div>

			<div class="col-md-4 form-group">
				<label>Fecha inicio</label>
				<input type="date" name="fech_ini_oferta" class="form-control" placeholder="Fecha inicio">
			</div>
			<div class="col-md-4 form-group">
				<label>Fecha final</label>
				<input type="date" name="fech_fin_oferta" class="form-control" placeholder="Fecha final">
			</div>
			<div class="col-md-4">
				<label>Imagen</label>
				<input type="file" name="imag_oferta">
			</div>



		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Oferta", "Oferta", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>


	</form>
	<br>