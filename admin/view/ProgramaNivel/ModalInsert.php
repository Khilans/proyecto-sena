<div class="container">
	<div class="alert alert-success" role="alert">
		<h4 class="alert-success text-center">REGISTRAR NIVEL DE PROGRAMA</h4>
		<p>Los campos con * son obligatorios</p>
	</div>
	<form action="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div style="margin: 1em;" class="row">
			<div class="col-md-4 form-group">
				<label>Descripción nivel*</label>
				<input  required="required"  type="text" name="nom_prog_niv" class="form-control" placeholder="nivel">
			</div>
		</div>
		<div class="row">
			<div style="margin: 1em;" class="col-md-6">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "consult"); ?>"><button type="button" class="btn btn-primary">Cancelar</button></a>
			</div>
		</div>
	</form>
</div>
<br>