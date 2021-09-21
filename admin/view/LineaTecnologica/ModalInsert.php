<div class="container">
	<div class="alert alert-success" role="alert">
		<h4 class="alert-success text-center">Registrar Línea Tecnológica</h4>
		<p>Los campos con * son obligatorios.</p>
	</div>
	<form action="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div style="margin: 1em;" class="row">
			<div class="col-md-4 form-group">
				<label>Descripción*</label>
				<input  required="required"  type="text" name="lin_tec_desc" class="form-control" placeholder="Descripción">
			</div>
		</div>
		<div class="row">
			<div style="margin: 1em;" class="col-md-6">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>
	</form>
</div>