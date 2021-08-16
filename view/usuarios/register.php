<?php
    include_once '../lib/helpers.php';
?>
<form action="<?php echo getUrl("Registro","Registro","postRegister");?>" method="post">
    <label>Primer nombre</label>
    <input type="text" name="pnombre" class="form-control">
    <label>Segundo nombre</label>
    <input type="text" name="snombre" class="form-control">
    <label>Apellidos</label>
    <input type="text" name="apellidos" class="form-control">
    <label>Contraseña</label>
    <input type="password" name="contraseña" class="form-control">
    <label>Confirma la contraseña</label>
    <input type="password" name="confirm" class="form-control">
    <label>Tipo de documento</label>
    <select name="tdocumento" class="form-control">
        <option value="">Seleccione...</option>
        <?php
            foreach($tipos_documentos as $td){
                echo "<option value='".$td['cod_tipo_doc']."'>".$td['nom_tipo_cod']."</option>";
            }
        ?>
    </select>
    <label>Número de documento</label>
    <input type="number" name="ndocumento" class="form-control">
    <label>Correo electrónico</label>
    <input type="text" name="correo" class="form-control">
    <input type="submit" value="Enviar" >
</form>