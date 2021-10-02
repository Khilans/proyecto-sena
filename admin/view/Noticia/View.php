<div class="container">
    <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
            <p>La noticia será habilitada, los usuarios podrán interactuar con ella</p>
    </div>        
    <?php
        foreach ($noticias as $not) {
    ?>
    <form action="<?php echo getUrl("Noticia","Noticia","postView"); ?>" method="post">

        <div  class="row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="hidden" name="cod_noticia" class="form-control" value="<?php echo $not['cod_noticia']; ?>">
                <textarea name="titulo_noticia" rows="1" cols="50" placeholder="Descripción" value="#"><?php echo $not['titulo_noticia']; ?></textarea>
            </div>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Confirmar</button>
            </div>
        </div>
    </form>
</div>
<?php
    }
?>