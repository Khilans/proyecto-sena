<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Registrar tipo de pqrsf</h4>
        <p><b>Los campos con * son obligatorios</b></p>
    </div>
    <form action="<?php echo getUrl("Tpqrs", "Tpqrs", "postInsert"); ?>" method="post">
        <div class="row">
            <div class="form-group col-md-8">
                <label>Nombre*</label>
                <input  required="required"  type="text" name="desc_pqrsf_tipo" class="form-control" placeholder="Tipo pqrsf">
            </div>
        </div>
        <div class="row">
            <div style="margin: 1em;" class="col-md-4">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
        </div>

    </form>
</div>