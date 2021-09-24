<div class="container">
<div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Registrar noticia</h4>
                <p><b>Los campos con * son obligatorios</b></p>
        </div>
	<form action="<?php echo getUrl("Oferta", "Oferta", "postInsert"); ?>" method="post">
		<div class="row">
		<div class="col-md-7 form-group">
				<label>Nombre de la oferta*</label>
				<input  type="text" name="nom_oferta" class="text_field contact_form_message" placeholder="Nombre" required="required">
				
			</div>
			<div class="col-md-7 form-group">
				<label>Descripción oferta*</label>
				<textarea  rows="1" cols="40" class="text_field contact_form_message" name="desc_oferta" placeholder="Descripción" required="required"></textarea>
			</div>
			<div class="col-md-7 form-group">
				<label>Fecha final*</label>
				<input  required="required" type="date" name="fech_fin_oferta" class="form-control" placeholder="Fecha final">
				<input type="hidden" name="fech_ini_oferta" class="form-control">
			</div>
			<div class="col-md-7">
				<label>Cupos disponibles*</label>
				<input   required="required" type="number" name="cupos_oferta">
			</div>
			<div class="col-md-7">
				<label>Imagen*</label>
				<input   required="required" type="file" name="imag_oferta">
			</div>

		</div>
		<div class="modal-footer">
			<div  class="col-md-5">
				<input type="submit" value="Enviar" class="btn btn-success">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>


	</form>