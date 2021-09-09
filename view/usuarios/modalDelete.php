<?php
foreach ($usuarios as $usu) {
  ?>
<div class="modal-body">
        <form action="<?php echo getUrl("Usuarios","Usuarios","postDelete",array("id"=>$usu['usu_id']))?>" method="post" enctype="multipart/form-data">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-center">¿Está seguro de realizar esta acción?</h4>
        <p>El usuario será inhabilitado indefinidamente</p>
    </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <label>Primer nombre</label>
                    <input type="hidden" name="usu_id" value="<?php echo $usu['usu_id'];?>">
                <input type="text"  name="usu_nombre" class="form-control" value="<?php echo $usu['usu_nombre'];?> " disabled>
                </div>
                <div class="col-md-4 form-group">
                    <label>Segundo nombre</label>
                    <input type="text"  name="usu_nombre2" class="form-control" value="<?php echo $usu['usu_nombre2'];?>" disabled>
                </div>            
                <div class="col-md-4 form-group">
                    <label>Apellidos</label>
                    <input type="text"  name="usu_apellido" class="form-control" value="<?php echo $usu['usu_apellido'];?>" disabled>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 form-group">
                    <label>Tipo de documento</label>
                    <select class="form-control text-center" name="cod_tipo_doc" disabled>
                        <option value="<?php echo $usu['cod_tipo_doc'];?>"><?php echo $usu['nom_tipo_doc']; ?></option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label>Número de documento</label>
                    <input type="text"  name="usu_ndocumento" class="form-control" value="<?php echo $usu['usu_ndocumento'];?>" disabled>
                </div>
            </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Confirmar</button>
            </div>
        </form>
</div>
<?php
}
?>