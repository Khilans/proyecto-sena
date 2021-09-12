<?php
foreach ($usuarios as $usu) {
  ?>
<div class="modal-body">
    <form action="<?php echo getUrl("Usuarios","Usuarios","postUpdate")?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6 form-group">
                <label>Primer nombre</label>
                <input type="hidden" name="usu_id" value="<?php echo $usu['usu_id'];?>">
            <input type="text"  name="usu_nombre" class="form-control" value="<?php echo $usu['usu_nombre'];?>">
            </div>
            <div class="col-md-6 form-group">
                <label>Segundo nombre</label>
                <input type="text"  name="usu_nombre2" class="form-control" value="<?php echo $usu['usu_nombre2'];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label>Apellidos</label>
                <input type="text"  name="usu_apellido" class="form-control" value="<?php echo $usu['usu_apellido'];?>">
            </div>
            <div class="col-md-6 form-group">
                <label>Tipo de documento</label>
                <select class="form-control" name="cod_tipo_doc">
                    <option value="">Seleccione...</option>
                     <?php
                        foreach ($tipodocumento as $tipodocu) {
                            if ($usu['cod_tipo_doc']==$tipodocu['cod_tipo_doc']){
                                $select="selected";
                            }else{
                                $select="";
                            }
                            echo "<option value='".$tipodocu['cod_tipo_doc']."' $select>".$tipodocu ['nom_tipo_doc']."</option>";
                        }
                    ?>    
                </select>
            </div>
        </div>
            <div class="col-md-12 form-group">
                <label>Número de documento</label>
                <input type="text"  name="usu_ndocumento" class="form-control" value="<?php echo $usu['usu_ndocumento'];?>">
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
