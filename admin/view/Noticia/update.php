<div class="jumbotron mt-4">
    <h2 class="display-4">Editar noticia</h2>
</div>
<div class="container">
    <?php
    foreach ($noticias as $noti){
    ?>
    <form action="<?php echo getUrl("Noticia","Noticia","postUpdate");?>" method="post" >
        <div class="row">
            <div class="form-group col-md-7">
                <label>Descripcion</label>
                <input type="hidden" name="cod_noticia" value="<?php echo $noti['cod_noticia']; ?>">
                <textarea name="desc_noticia" rows="1" cols="50" placeholder="descripcion de la noticia" value="<?php echo $noti['desc_noticia']; ?>"></textarea>
            </div> 
            <div class="form-group col-md-7">
                <label>Titulo</label>
                <input type="text" name="titulo_noticia" class="form-control" value="<?php echo $noti['titulo_noticia']; ?>">
            </div>
            <div class="col-md-4">
                <label>Imagen</label>
                <div id="cambiarImagen">
                    <img class="d-block" id="imagen" src="<?php echo $noti['img_noticia'] ?>" width="150px">
                    <button type="button" id="cambioDeImagen" class="btn btn-primary mt-3">Cambiar imagen</button>
                </div>
            </div>
            <div class=" form-group col-md-4">
                <label>Tipo de noticia</label>
                <select name="cod_tipo_noti" class="form-control">
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
            <div class=" form-group col-md-4">
                <label>Estado</label>
                <select name="id_estado" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                    foreach ($estados as $estd) {
                        if ($estd['id_estado'] == $noti['id_estado']) {

                            echo "<option value='" . $estd['id_estado'] . "'selected>" . $estd['desc_estado'] . "</option>";
                        } else {
                            echo "<option value='" . $estd['id_estado'] . "'>" . $estd['desc_estado'] . "</option>";
                        }
                    } 
                    ?>
                </Select>
            </div>  
        </div> 
        <div class="row">
            <div class="col-md-4"> 
                <input type="submit" value="enviar" class="btn btn-success">
                <a href="<?php echo getUrl("Noticia","Noticia","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
            </div>
        </div>
        
    </form>

    <?php

    }
    ?>
</div>



