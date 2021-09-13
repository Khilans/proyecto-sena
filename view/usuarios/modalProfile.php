<?php
foreach ($usuario as $usu) {
  ?>
<div class="modal-body">
    <form action="<?php echo getUrl("Usuarios","Usuarios","postUpdateProfile")?>" method="post" enctype="multipart/form-data">
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading text-center">¡Hola, <?php echo $_SESSION['nombre']; ?>!</h4>
            <p class="text-center">Aquí puedes actualizar tus datos personales.</p>
            <p class="text-center">Tu rol actual es: <?php echo $usu['desc_rol']; ?></p>

        </div>
            <div class="row">
                <div class="col-md-3 form-group">
                    <label>Primer nombre</label>
                    <input type="hidden" name="usu_id" value="<?php echo $_SESSION['user_id'];?>">
                <input type="text"  name="usu_nombre" class="form-control text-center" value="<?php echo $usu['usu_nombre'];?>">
                </div>
                <div class="col-md-4 form-group">
                    <label>Segundo nombre</label>
                    <input type="text"  name="usu_nombre2" class="form-control text-center" value="<?php echo $usu['usu_nombre2'];?>">
                </div>
                <div class="col-md-5 form-group">
                    <label>Apellidos</label>
                    <input type="text"  name="usu_apellido" class="form-control text-center" value="<?php echo $usu['usu_apellido'];?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Tipo de documento</label>
                    <select class="form-control text-center" name="cod_tipo_doc">
                        <option value="<?php echo $usu['cod_tipo_doc'];?>"><?php echo $usu['nom_tipo_doc']; ?></option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label>Número de documento</label>
                    <input type="text"  name="usu_ndocumento" class="form-control text-center" value="<?php echo $usu['usu_ndocumento'];?>">
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