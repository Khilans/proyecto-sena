<div class="container">
<div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Registrar</h4>
                <p><b>Por favor llenar todos los campos</b></p>
        </div>
	<form action="<?php echo getUrl("Configuracion", "Configuracion", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-7 form-group">
				<label>Descripción</label>
				<textarea name="desc_config" rows="1" cols="50" placeholder="Descripción "></textarea>
			</div>
			<div class="col-md-7 form-group">
				<label>Correo</label>
				<input type="text" name="correo_config" class="form-control" placeholder="Correo">
			</div>
			<div class="col-md-7 form-group">
				<label>Dirección</label>
				<input type="text" name="dir_config" class="form-control" placeholder="Dirección">
			</div>
			<div class="col-md-7 form-group">
				<label>Teléfono</label>
				<input type="number" name="tel_config" class="form-control" placeholder="Teléfono">
			</div>

		</div>
		<div class="row">
			<div style="margin: 1em;" class="col-md-6">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Configuracion", "Configuracion", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>


	</form>