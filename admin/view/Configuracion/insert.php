<div class="container">
	<div class="jumbotron">
		<h3 class="display-4">Registrar </h3>
	</div>
	<form action="<?php echo getUrl("Configuracion", "Configuracion", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 form-group">
				<label>Descripción</label>
				<textarea name="desc_config" rows="1" cols="50" placeholder="Descripcion "></textarea>
			</div>
			<div class="col-md-4 form-group">
				<label>Correo</label>
				<input type="text" name="correo_config" class="form-control" placeholder="Correo">
			</div>
			<div class="col-md-4 form-group">
				<label>Direccion</label>
				<input type="text" name="dir_config" class="form-control" placeholder="Dirección">
			</div>
			<div class="col-md-4 form-group">
				<label>Telefono</label>
				<input type="number" name="tel_config" class="form-control" placeholder="Telefono">
			</div>

		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Configuracion", "Configuracion", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>


	</form>