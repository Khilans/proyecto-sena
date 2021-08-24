<?php 
    include_once '../lib/helpers.php';
    include_once '../view/partials/head.php';
?>
<form action="<?php echo getUrl("Acceso","Acceso","login"); ?>" method="post">
   <label>Número de documento</label>
    <input type="number" name="usu_ndocumento" placeholder="Digite número de documento">
    <label>Contraseña</label>
    <input type="password" name="usu_pass" id="">
    <input type="submit" value="Enviar">
</form>

