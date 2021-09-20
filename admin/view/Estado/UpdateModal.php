<div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Editar estado</h4>
                <p></p>
    </div>
<div class="container">
    <?php
    foreach ($estados as $estd) {
    ?>
    <form action="<?php echo getUrl("Estado", "Estado", "postUpdate"); ?>" method="post">
        <div class="row ">
            <div class="form-group col-md-7">
                <label>Nombre</label>
                <input type="hidden" name="id_estado" value="<?php echo $estd['id_estado']; ?>">
                <input type="text" name="desc_estado" class="form-control" value="<?php echo $estd['desc_estado']; ?>">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Confirmar</button>
        </div>
    </form>
    <?php
    }
    ?>
</div class="container">