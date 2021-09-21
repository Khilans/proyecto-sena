
<div class="container">    
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Editar tipo pqrsf</h4>
        <p>Por favor llenar los campos con *</p>
    </div>
    
    <?php
    foreach ($Tipo_pqrs as $Tpq){
    ?>
    <form action="<?php echo getUrl("Tpqrs","Tpqrs","postUpdate");?>" method="post"> 
        <div class="row">   
            <div class="form-group col-md-7">
                <label>Nombre*</label>
                <input type="hidden" name="cod_pqrsf_tipo" value="<?php echo $Tpq['cod_pqrsf_tipo'];?>">
                <input required="required"  type="text" name="desc_pqrsf_tipo" class="form-control" value="<?php echo $Tpq['desc_pqrsf_tipo'];?>">
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
