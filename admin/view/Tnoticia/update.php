<div class="container">    
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Editar noticia</h4>
        <p></p>
    </div>
    
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
            <div style="margin: 1em;" class="col-md-6">
                <input type="submit" value="enviar" class="btn btn-success">
                <a href="<?php echo getUrl("Tnoticia","Tnoticia","consult") ?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
            </div>
        </div>  
    </form>  
    <?php
        }
    ?>
</div>          