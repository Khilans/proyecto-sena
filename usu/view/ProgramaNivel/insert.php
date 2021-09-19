<div class="container">
	<div class="jumbotron">
		<h3 class="display-4">Registrar Nivel</h3>
	</div>
	<form action="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 form-group">
				<label>Descripción nivel</label>
				<input type="text" name="nom_prog_niv" class="form-control" placeholder="nivel">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>
	</form>
</div>
<br>