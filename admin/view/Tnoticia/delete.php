<div class="container">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
        <p>El tipo de noticia será inhabilitada indefinidamente</p>
    </div>
    <?php
        foreach ($tipo_noticias as $tipo_not) {
    ?>
    <form action="<?php echo getUrl("Tnoticia","Tnoticia","postDelete"); ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="hidden" name="cod_tipo_noti" value="<?php echo $tipo_not['cod_tipo_noti']; ?>">
                <input type="text" readonly name="desc_tipo_noti" class="form-control" value="<?php echo $tipo_not['desc_tipo_noti'] ?>"> 
                
            </div>
        </div>
        <div class="row">
            <div style="margin: 1em;" class="col-md-6">
                <input type="submit" value="Eliminar" class="btn btn-danger">
                <a href="<?php echo getUrl("Tnoticia","Tnoticia","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</dvi>    