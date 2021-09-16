<div class="container">
    <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
            <p></p>
    </div>        
    <?php
        foreach ($configuracion as $confi) {
    ?>
    <form action="<?php echo getUrl("Configuracion","Configuracion","postDelete"); ?>" method="post">

        <div style="margin: 1em;" class="row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="hidden" name="id_config" value="<?php echo $confi['id_config']; ?>">
                <input type="text" readonly name="titulo_noticia" class="form-control" value="<?php echo $confi['titulo_noticia']; ?>"> 
            
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input style="margin: 1em;" type="submit" value="Eliminar" class="btn btn-danger">
                <a href="<?php echo getUrl("Configuracion","Configuracion","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
            </div>
        </div>
    </form>
</div>
<?php
    }
?>