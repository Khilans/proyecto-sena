<div class="container">
	<div class="jumbotron">
		<h3 class="display-4">Registrar documento</h3>
	</div>
	<form action="<?php echo getUrl("Ttipodocumento", "Ttipodocumento", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 form-group">
				<label>Descripción</label>
				<input type="text" name="nom_tipo_doc" class="form-control" placeholder="Descripción">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Ttipodocumento", "Ttipodocumento", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>
	</form>
</div>