<?php
    include_once '../lib/helpers.php';
?>
<form action="<?php echo getUrl("Registro","Registro","register");?>" method="post">
    <label>Primer nombre</label>
    <input type="text" name="pnombre">
    <label>Segundo nombre</label>
    <input type="text" name="snombre">
    <label>Apellidos</label>
    <input type="text" name="apellidos">
    <label>Contraseña</label>
    <input type="password" name="contraseña">
    <label>Confirma la contraseña</label>
    <input type="password" name="confirm" class="form-control">
    <label>Tipo de documento</label>
    <select name="tdocumento">
        <option value="">Seleccione...</option>
        <option value="1">Cédula de ciudadanía</option>
    </select>
    <label>Número de documento</label>
    <input type="number" name="ndocumento">
    <label>Correo electrónico</label>
    <input type="text" name="correo">
    <input type="submit" value="Enviar">
</form>