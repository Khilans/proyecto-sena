<div class="container">
    <div class="jumbotron mt-4">
        <h2 class="display-4">Editar área</h2>
    </div>
    <?php
    foreach ($progarea as $prog) {
    ?>
        <form action="<?php echo getUrl("ProgramaArea", "ProgramaArea", "postUpdate"); ?>" method="post">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label>Área</label>
                    <input value="<?php echo $prog['prog_area_desc'] ?>" type="text" name="prog_area_desc" class="form-control" placeholder="Descripción">
                    <input value="<?php echo $prog['prog_area_cod'] ?>" type="hidden" name="prog_area_cod" class="form-control"">

                </div>
		
		         <div class=" col-md-4 form-group">
                    <label>Línea tecnológica</label>
                    <select name="lin_tec_cod" class="form-control">
                        <option value="">Seleccione...</option>

                        <?php
                        foreach ($lineatecnologica as $linea) {
                            
                           if ($linea['lin_tec_cod'] == $prog['lin_tec_cod']) {
                            
                               echo "<option value='".$linea['lin_tec_cod']."' selected>".$linea['lin_tec_desc']."</option>";
                           }else{
                               echo "<option value='".$linea['lin_tec_cod']."' >".$linea['lin_tec_desc']."</option>";
                           }
                        }
                        ?>
                    </select>
                </div> 

            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="submit" value="Enviar" class="btn btn-success">
                    <a href="<?php echo getUrl("ProgramaArea", "ProgramaArea", "consult"); ?>"><button type="button" class="btn btn-outline-primary">Volver</button></a>
                </div>
            </div>


        </form>

    <?php

    }
    ?>
</div>
<br>