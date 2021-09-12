<div class="jumbotron mt-4">
    <h2 class="display-4">Editar tipo de noticia</h2>
</div>
<div class="container">
    <?php
    foreach ($tipo_noticias as $tipo_not){
    ?>
    <form action="<?php echo getUrl("Tnoticia","Tnoticia","postUpdate");?>" method="post"> 
        <div class="row">   
            <div class="form-group col-md-7">
                <label>Nombre</label>
                <input type="hidden" name="cod_tipo_noti" value="<?php echo $tipo_not['cod_tipo_noti'];?>">
                <input type="text" name="desc_tipo_noti" class="form-control" value="<?php echo $tipo_not['desc_tipo_noti'];?>">
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
</div>          