<div class="container">
<div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Registrar pqrsf</h4>
                <p><b>Por favor llenar todos los campos</b></p>
        </div>
	<form action="<?php echo getUrl("Pqrsf", "Pqrsf", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div style="margin: 1em;" class="row">
			<div class="col-md-7 form-group">
				<label>Descripción</label>
				<textarea name="desc_pqrsf" rows="1" cols="50" placeholder="Descripción "></textarea>
			</div>
			<div class="col-md-7 form-group">
				<label>Correo</label>
				<input type="text" name="usu_correo" class="form-control" placeholder="Correo">
			</div>
			<div class="col-md-7 form-group">
				<label>Fecha</label>
				<input type="date" name="pqrsf_fecha" class="form-control" placeholder="Fecha">
			</div>
			<div class="col-md-7 form-group">
				<label>Tipo de pq</label>
				<select name="cod_pqrsf_tipo" class="form-control">
					<option value="">Seleccione...</option>

					<?php
					foreach ($tipoPQRSF as $Tpq) {
						echo "<option value='" . $Tpq['cod_pqrsf_tipo'] . "'>" . $Tpq['desc_pqrsf_tipo'] . "</option>";
					}
					?>
				</select>
			</div>
			<div class="col-md-7 form-group">
				<label></label>
				<input type="hidden" name="id_estado" class="form-control" >
			</div>

		</div>
		<div class="row">
			<div style="margin: 1em;" class="col-md-6">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Pqrsf", "Pqrsf", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>


	</form>