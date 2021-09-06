<div class="jumbotron mt-4">
    <h2 class="display-4">Editar programa</h2>
</div>
<div class="container">
    <?php
    foreach ($programas as $prog){
    ?>
    <form action="<?php echo getUrl("Programa","Programa","postUpdate");?>" method="post">
        <div class="row">
            <div class="form-group col-md-7">
                <label>Nombre</label>
                <input type="hidden" name="id_prog" value="<?php echo $prog['id_prog']; ?>">
                <input type="text" name="nom_prog" class="form-control" value="<?php echo $prog['nom_prog']; ?>">     
            </div> 
            <div class="form-group col-md-7">
                <label>Descripcion</label>
                <textarea name="desc_prog" rows="1" cols="50" placeholder="descripcion del programa" value="<?php echo $prog['desc_prog']; ?>"></textarea>
                
            </div>
            <div class=" form-group col-md-4">
                <label>Linea</label>
                <select name="lin_tec_cod" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                    foreach ($lineatecnologica as $linea) {
                        if ($linea['lin_tec_cod'] == $prog['lin_tec_cod']) {

                            echo "<option value='" . $linea['lin_tec_cod'] . "'selected>" . $linea['lin_tec_desc'] . "</option>";
                        } else {
                            echo "<option value='" . $linea['lin_tec_cod'] . "'>" . $linea['lin_tec_desc'] . "</option>";
                        }
                    }
                    ?>
                </Select>
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



