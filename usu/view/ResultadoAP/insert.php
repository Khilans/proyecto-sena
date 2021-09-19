<div class="container">
	<div class="jumbotron">
		<h3 class="display-4">Registrar resultado</h3>
	</div>
	<form action="<?php echo getUrl("ResultadoAp", "ResultadoAp", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 form-group">
				<label>Descripción</label>
				<textarea name="res_apr_desc" rows="1" cols="50" placeholder="Descripcion del resultados"></textarea>
			</div>
			
			 <div class="col-md-4 form-group">
				<label>Competencia</label>
				<select name="cod_comp" class="form-control">
					<option value="">Seleccione...</option>

					<?php
					 foreach ($tipo_noticias as $tipo_not) {
						echo "<option value='" . $tipo_not['cod_comp'] . "'>" . $tipo_not['desc_comp'] . "</option>";
					} 
					?>
				</select>
                </div>
		    </div> 
		
		<div class="row">
			<div class="col-md-4">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("ResultadoAp", "ResultadoAp", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>


	</form>
</div>		