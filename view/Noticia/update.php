<div class="jumbotron mt-4">
    <h3 class="display-4">Editar noticias</h3>
</div>
<?php
foreach ($noticias as $noti) {
?>
    <form action="<?php echo getUrl("Noticia", "Noticia", "postUpdate"); ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="hidden" name="cod_noticia" value="<?php echo $noti['cod_noticia']; ?>">
    <input type="text" name="desc_noticia" class="form-control" value="<?php echo $noti['desc_noticia']; ?>">
            </div>

            <div class=" form-group col-md-4">
                <label>Tipo noticia</label>
                <select name="cod_tipo_noticia" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                    foreach ($tipo_noticias as $tipo_not) {
                        if ($tipo_not['cod_tipo_noticia'] == $not['cod_tipo_noticia']) {

                            echo "<option value='" . $tipo_not['cod_tipo_noticia'] . "'selected>" . $tipo_not['desc_tipo_noti'] . "</option>";
                        } else {
                            echo "<option value='" . $tipo_not['cod_tipo_noticia'] . "'>" . $tipo_not['desc_tipo_noti'] . "</option>";
                        }
                    }
                    ?>
                </Select>
            </div>
            <div class=" form-group col-md-4">
                <label>Estado</label>
                <select name="id_estado" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                    foreach ($estados as $estd) {
                        if ($estd['id_estado'] == $not['id_estado']) {

                            echo "<option value='" . $estd['id_estado'] . "'selected>" . $estd['desc_estado'] . "</option>";
                        } else {
                            echo "<option value='" . $estd['id_estado'] . "'>" . $estd['desc_estado'] . "</option>";
                        }
                    }
                    ?>
                </Select>
            </div>
            <div class="col-md-4">
                <label>Imagen</label>
                <div id="cambiarImagen">
                    <img class="d-block" id="imagen" src="<?php echo $ciu['img_ciudad'] ?>" width="150px">
                    <button type="button" id="cambioImagen" class="btn btn-primary mt-3">Cambiar imagen</button>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <input type="submit" value="enviar" class="btn btn-success">

            </div>
        </div>

    </form>

<?php

}
?>