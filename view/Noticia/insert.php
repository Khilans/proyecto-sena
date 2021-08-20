<div class="container">
<div class="jumbotron">
	<h3 class="display-4">Registrar noticia</h3>
</div>
<form action="<?php echo getUrl("Noticia", "Noticia", "postInsert"); ?>" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-4 form-group">
			<label>Titulo</label>
            <input type="hidden" name="cod_noticia" class="form-control" >
			<input type="text" name="titulo_noticia" class="form-control" placeholder="Titulo">
		</div>
		<div class="col-md-4">
			<label>Imagen</label>
			<input type="file" name="img_noticia">
		</div>
         <div class="col-md-4 form-group">
			<label>Descripción</label>
			<input type="text" name="desc_noticia" class="form-control" placeholder="Descripción">
		</div> 



		<div class="col-md-4 form-group">
			<label>Tipo de noticia</label>
			<select name="cod_tipo_noti" class="form-control">
				<option value="">Seleccione...</option>

				<?php
				foreach ($noticias as $not) {
					echo "<option value='" . $not['cod_tipo_noti '] . "'>" . $not['desc_tipo_noti'] . "</option>";
				}
				?>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<input type="submit" value="Enviar" class="btn btn-success">
			<a href="<?php echo getUrl("Noticia", "Noticia", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
		</div>
	</div>

			
</form>
