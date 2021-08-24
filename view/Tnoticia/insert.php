<div class="container">
    <div class="jumbotron mt-4">
        <h3 class="dislay-4">Registra tipo de noticia</h3>
    </div>
    <form action="<?php echo getUrl("Tnoticia", "Tnoticia", "postInsert"); ?>" method="post">
        <div class="row">
            <div class="form-group col-md-8">
                <label>Nombre</label>
                <input type="text" name="desc_tipo_noti" class="form-control" placeholder="Tipo noticia">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
        </div>

    </form>
</div>