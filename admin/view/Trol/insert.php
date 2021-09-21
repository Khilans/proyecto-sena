<div class="container">
<div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Registrar rol</h4>
                <p><b>Los campos con * obligatorios</b></p>
        </div>
	<form action="<?php echo getUrl("Trol", "Trol", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 form-group">
				<label>Descripción*</label>
				<input  required="required" type="text" name="desc_rol" class="form-control" placeholder="Descripción">
			</div>
		</div>
		<div class="row">
			<div style="margin: 1em;"  class="col-md-6">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Trol", "Trol", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>
	</form>
</div>