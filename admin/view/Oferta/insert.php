<div class="container">
<div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Registrar noticia</h4>
                <p><b>Por favor llenar todos los campos</b></p>
        </div>
	<form action="<?php echo getUrl("Oferta", "Oferta", "postInsert"); ?>" method="post">
		<div class="row">
		<div class="col-md-7 form-group">
				<label>Nombre de la oferta</label>
				<input type="text" name="nom_oferta" class="form-control" placeholder="Nombre">
				
			</div>
			<div class="col-md-7 form-group">
				<label>Descripción oferta</label>
				<textarea name="desc_oferta" rows="1" cols="40" placeholder="Nombre"></textarea>
			</div>
			<div class="col-md-7 form-group">
				<label>Fecha final</label>
				<input type="date" name="fech_fin_oferta" class="form-control" placeholder="Fecha final">
				<input type="hidden" name="fech_ini_oferta" class="form-control">
			</div>
			<div class="col-md-7">
				<label>Cupos disponibles</label>
				<input type="number" name="cupos_oferta">
			</div>
			<div class="col-md-7">
				<label>Imagen</label>
				<input type="file" name="imag_oferta">
			</div>

		</div>
		<div class="row">
			<div style="margin: 1em;" class="col-md-6">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Oferta", "Oferta", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>


	</form>