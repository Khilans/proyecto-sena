<?php
foreach ($usuarios as $usu) {
  ?>
<div class="modal-body">
    <form action="<?php echo getUrl("Competencia","Competencia","postUpdate")?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6 form-group">
                <label>Competencia</label>
                <input type="hidden" name="comp_id" value="<?php echo $usu['usu_id'];?>">
                <input type="text"  name="usu_nombre" class="form-control" value="<?php echo $usu['usu_nombre'];?>">
            </div>
        </div>

    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Confirmar</button>
        </div>
    </form>
</div>
<?php
}
?>