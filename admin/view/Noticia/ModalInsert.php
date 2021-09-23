<div class="container">
<div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Registrar noticia</h4>
                <p><b>Los campos con * son obligatorios</b></p>
        </div>
	<form action="<?php echo getUrl("Noticia", "Noticia", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div style="margin: 1em;" class="row">
			<div class="col-md-7 form-group">
				<label>Descripción*</label>
				<textarea required="required"   name="desc_noticia" rows="1" cols="50" placeholder="Descripción de la noticia"></textarea>
			</div>
			<div class="col-md-7 form-group">
				<label>Título*</label>
				<input  required="required"  type="text" name="titulo_noticia" class="form-control" placeholder="Título">
			</div>
			<div class="col-md-7">
				<label>Imagen*</label>
				<input  required="required"  type="file" name="img_noticia">
			</div>
			<div class="col-md-7 form-group">
				<label>Tipo de noticia*</label>
				<select  required="required"  name="cod_tipo_noti" class="form-control">
					<option value="">Seleccione...</option>

					<?php
					foreach ($tipo_noticias as $tipo_not) {
						echo "<option value='" . $tipo_not['cod_tipo_noti'] . "'>" . $tipo_not['desc_tipo_noti'] . "</option>";
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
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>


	</form>