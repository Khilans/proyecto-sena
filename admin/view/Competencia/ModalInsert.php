<div class="container">
	<div class="alert alert-success" role="alert">
		<h4 class="alert-success text-center">Registrar las competencias</h4>
	</div>
	<form action="<?php echo getUrl("Competencia", "Competencia", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div style="margin: 1em;" class="row">
			<div class="col-md-4 form-group">
				<label>Descripción</label>
				<input required="required" type="text" name="desc_competencia" class="form-control" placeholder="Descripción">
			</div>
		</div>
		<div style="margin: 1em;" class="row">
			<div class="col-md-4 form-group">
				<label>Código</label>
				<input  type="number" name="cod_competencia" class="form-control" placeholder="Descripción">
			</div>
		</div>


		 <div class="col-md-6 form-group">
			<label>Programa</label>
			<select name="id_prog" class="form-control">
				<option value="">Seleccione...</option>

				<?php
				foreach ($programa as $prog) {
					echo "<option value='" . $prog['id_prog'] . "'>" . $prog['nom_prog'] . "</option>"; 
				}
				?>
			</select>
		</div> 

		<div class="row">
			<div style="margin: 1em;" class="col-md-6">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Competencia", "Competencia", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>
	</form>
</div>