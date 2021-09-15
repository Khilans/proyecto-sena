<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Registrar estado</h4>
        <p><b>Por favor llenar todos los campos</b></p>
    </div>
    <form action="<?php echo getUrl("Estado", "Estado", "postInsert"); ?>" method="post">
        <div class="row">
            <div class="form-group col-md-8">
                <label>Nombre</label>
                <input type="text" name="desc_estado" class="form-control" placeholder="Estado">
            </div>
        </div>
        <div class="row">
            <div style="margin: 1em;" class="col-md-4">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
        </div>

    </form>
</div>