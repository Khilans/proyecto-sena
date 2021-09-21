<div class="container">    
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Editar noticia</h4>
        <p>por favor llenar los campos con *</p>
    </div>
    
    <?php
    foreach ($tipo_noticias as $tipo_not){
    ?>
    <form action="<?php echo getUrl("Tnoticia","Tnoticia","postUpdate");?>" method="post"> 
        <div class="row">   
            <div class="form-group col-md-7">
                <label>Nombre*</label>
                <input type="hidden" name="cod_tipo_noti" value="<?php echo $tipo_not['cod_tipo_noti'];?>">
                <input  required="required"  type="text" name="desc_tipo_noti" class="form-control" value="<?php echo $tipo_not['desc_tipo_noti'];?>">
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