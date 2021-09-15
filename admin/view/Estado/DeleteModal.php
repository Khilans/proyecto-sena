<div class="container">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
        <p>El estado será inhabilitado indefinidamente</p>
    </div>      
    <?php
        foreach ($estados as $estd) {
    ?>
    <form action="<?php echo getUrl("Estado","Estado","postDelete"); ?>" method="post">

        <div style="margin: 1em;" class="row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="hidden" name="id_estado" value="<?php echo $estd['id_estado']; ?>">
                <input type="text" readonly name="desc_estado" class="form-control" value="<?php echo $estd['desc_estado']; ?>"> 
            
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input style="margin:1em;" type="submit" value="Eliminar" class="btn btn-danger">
                <a href="<?php echo getUrl("Estado","Estado","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
            </div>
        </div>
    </form>
</div>
<?php
    }
?>