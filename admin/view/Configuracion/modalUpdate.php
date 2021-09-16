<div class="container">
    <div class="alert alert-success" role="alert">
                <h4 class="alert-success text-center">Editar configuración</h4>
                <p></p>
        </div>

    <?php
    foreach ($configuracion as $confi){
    ?>
    <form action="<?php echo getUrl("Configuracion","Configuracion","postUpdate");?>" method="post" enctype="multipart/form-data">
        <div style="margin: 1em;" class="row">
            <div class="form-group col-md-7">
                <label>Descripción</label>
                <input type="hidden" name="id_config" value="<?php echo $confi['id_config']; ?>">
                <textarea name="desc_config" rows="1" cols="50" placeholder="Descripción" value="<?php echo $confi['desc_config']; ?>"></textarea>
            </div> 
            <div class="form-group col-md-7">
                <label>Correo</label>
                <input type="text" name="correo_config" class="form-control" value="<?php echo $confi['correo_config']; ?>">
            </div>
            <div class="form-group col-md-7">
                <label>Dirección</label>
                <input type="text" name="dir_config" class="form-control" value="<?php echo $confi['dir_config']; ?>">
            </div>
            <div class="form-group col-md-7">
                <label>Telefono</label>
                <input type="text" name="tel_config" class="form-control" value="<?php echo $confi['tel_config']; ?>">
            </div>
            
            
        </div> 
        <div class="row">
            <div style="margin: 1em;" class="col-md-6"> 
                <input  type="submit" value="enviar" class="btn btn-success">
                <a href="<?php echo getUrl("Configuracion","Configuracion","consult") ?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
            </div>
        </div>
        
    </form>

    <?php

    }
    ?>
</div>