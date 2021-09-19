<div class="container">
    <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
            <p>La noticia será inhabilitada indefinidamente</p>
    </div>        
    <?php
        foreach ($noticias as $not) {
    ?>
    <form action="<?php echo getUrl("Noticia","Noticia","postDelete"); ?>" method="post">

        <div  class="row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="hidden" name="cod_noticia" value="<?php echo $not['cod_noticia']; ?>">
                <input type="text" readonly name="titulo_noticia" class="form-control" value="<?php echo $not['titulo_noticia']; ?>"> 
            
            </div>
        </div>
        <div class="row">
            <div style="margin: 1em;" class="col-md-6">
                <input  type="submit" value="Eliminar" class="btn btn-danger">
                <a href="<?php echo getUrl("Noticia","Noticia","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
            </div>
        </div>
    </form>
</div>
<?php
    }
?>
