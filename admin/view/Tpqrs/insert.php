<div class="container">
<<<<<<< HEAD
	<div class="jumbotron">
		<h3 class="display-4">Registrar pqrs</h3>
	</div>
	<form action="<?php echo getUrl("Tpqrs", "Tpqrs", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 form-group">
				<label>Descripción</label>
				<input type="text" name="desc_pqrsf_tipo" class="form-control" placeholder="Descripción">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="submit" value="Enviar" class="btn btn-success">
				<a href="<?php echo getUrl("Trol", "Trol", "consult"); ?>"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
		</div>
	</form>
=======
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Registrar tipo de pqrsf</h4>
        <p><b>Por favor llenar todos los campos</b></p>
    </div>
    <form action="<?php echo getUrl("Tpqrs", "Tpqrs", "postInsert"); ?>" method="post">
        <div class="row">
            <div class="form-group col-md-8">
                <label>Nombre</label>
                <input type="text" name="desc_pqrsf_tipo" class="form-control" placeholder="Tipo pqrsf">
            </div>
        </div>
        <div class="row">
            <div style="margin: 1em;" class="col-md-4">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
        </div>

    </form>
>>>>>>> 9aecbc786d905ed820fa5b7de7ce1093466331f8
</div>