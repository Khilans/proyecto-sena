<div class="container">
    <div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Editar noticia</h4>
                <p>Los campos con * son obligatorios</p>
    </div>

    <?php
    foreach ($noticias as $noti){
    ?>
    <form action="<?php echo getUrl("Noticia","Noticia","postUpdate");?>" method="post" enctype="multipart/form-data">
        <div style="margin: 1em;" class="row">
            <div class="form-group col-md-7">
                <label>Descripción*</label>
                <input type="hidden" name="cod_noticia" value="<?php echo $noti['cod_noticia']; ?>">
                <textarea  required="required"  name="desc_noticia" rows="1" cols="50" placeholder="Descripción" value="#"><?php echo $noti['desc_noticia']; ?></textarea>
            </div> 
            <div class="form-group col-md-7">
                <label>Título*</label>
                <input required="required" type="text" name="titulo_noticia" class="form-control" value="<?php echo $noti['titulo_noticia']; ?>">
            </div>
            <div class="col-md-7">
                <label>Imagen*</label>
                <div id="cambiarImagen">
                    <img class="d-block" id="imagen" src="<?php echo $noti['img_noticia'] ?>" width="150px">
                    <button type="button" id="cambioDeImagen" class="btn btn-primary mt-3">Cambiar imagen</button>
                </div>
            </div>
            <div class=" form-group col-md-7">
                <label>Tipo de noticia*</label>
                <select  required="required"  name="cod_tipo_noti" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                    foreach ($tipo_noticias as $tipo_not) {
                        if ($tipo_not['cod_tipo_noti'] == $noti['cod_tipo_noti']) {

                            echo "<option value='" . $tipo_not['cod_tipo_noti'] . "'selected>" . $tipo_not['desc_tipo_noti'] . "</option>";
                        } else {
                            echo "<option value='" . $tipo_not['cod_tipo_noti'] . "'>" . $tipo_not['desc_tipo_noti'] . "</option>";
                        }
                    }
                    ?>
                </Select>
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
</div>