<<<<<<< HEAD
<div class="container">
    <div class="jumbotron mt-4">
        <h2 class="display-4">Editar Linea Tecnologica</h2>
    </div>
    <div class="container">
        <?php
        foreach ($Tpqrs as $pqrs) {
        ?>
            <form action="<?php echo getUrl("Tpqrs", "Tpqrs", "postUpdate"); ?>" method="post">
                <div class="row ">
                    <div class="form-group col-md-7">
                        <label>Nombre</label>
                        <input type="hidden" name="cod_pqrsf_tipo" value="<?php echo $rol['cod_pqrsf_tipo']; ?>">
                        <input type="text" name="desc_pqrsf_tipo" class="form-control" value="<?php echo $rol['desc_pqrsf_tipo']; ?>">
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
</div>
=======
<div class="container">    
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Editar tipo pqrsf</h4>
        <p></p>
    </div>
    
    <?php
    foreach ($Tipo_pqrs as $Tpq){
    ?>
    <form action="<?php echo getUrl("Tpqrs","Tpqrs","postUpdate");?>" method="post"> 
        <div class="row">   
            <div class="form-group col-md-7">
                <label>Nombre</label>
                <input type="hidden" name="cod_pqrsf_tipo" value="<?php echo $Tpq['cod_pqrsf_tipo'];?>">
                <input type="text" name="desc_pqrsf_tipo" class="form-control" value="<?php echo $Tpq['desc_pqrsf_tipo'];?>">
            </div>
        </div>
        <div class="row">
            <div style="margin: 1em;" class="col-md-6">
                <input type="submit" value="enviar" class="btn btn-success">
                <a href="<?php echo getUrl("Tpqrs","Tpqrs","consult") ?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
            </div>
        </div>  
    </form>  
    <?php
        }
    ?>
</div>    
>>>>>>> 9aecbc786d905ed820fa5b7de7ce1093466331f8
