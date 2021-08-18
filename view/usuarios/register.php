<?php
    include_once '../lib/helpers.php';
?>
<form action="<?php echo getUrl("Registro","Registro","postRegister");?>" method="post">
    <label>Primer nombre</label>
    <input type="text" name="usu_nombre" class="form-control">
    <label>Segundo nombre</label>
    <input type="text" name="usu_nombre2" class="form-control">
    <label>Apellidos</label>
    <input type="text" name="usu_apellido" class="form-control">
    <label>Contraseña</label>
    <input type="password" name="usu_pass" class="form-control">
    <label>Confirma la contraseña</label>
    <input type="password" name="confirm" class="form-control">
    <label>Tipo de documento</label>
    <select name="cod_tipo_doc" class="form-control">
        <option value="">Seleccione...</option>
        <?php
            foreach($tipos_documentos as $td){
                echo "<option value='".$td['cod_tipo_doc']."'>".$td['nom_tipo_cod']."</option>";
            }
        ?>
    </select>
    <label>Número de documento</label>
    <input type="number" name="usu_ndocumento" class="form-control">
    <label>Correo electrónico</label>
    <input type="text" name="usu_correo" class="form-control">
    <input type="submit" value="Enviar" >
</form>