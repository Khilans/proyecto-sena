<div class="jumbotron mt-4">
    <h2 class="display-4">Editar resultado</h2>
</div>
<div class="container">
    <?php
    foreach ($resultados as $res){
    ?>
    <form action="<?php echo getUrl("ResultadoAp","ResultadoAp","postUpdate");?>" method="post">
        <div class="row">
            <div class="form-group col-md-7">
                <label>Descripcion</label>
                <input type="hidden" name="res_apr_cod" value="<?php echo $res['res_apr_cod']; ?>">
                <textarea name="res_apr_desc" rows="1" cols="50" placeholder="Descripcion" value="<?php echo $res['res_apr_desc']; ?>"></textarea>
            </div> 
            <!-- <div class=" form-group col-md-4">
                <label>Competencia</label>
                <select name="cod_comp" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                   /*  foreach ($competencias as $comp) {
                        if ($comp['cod_comp'] == $res['cod_comp']) {

                            echo "<option value='" . $comp['cod_comp'] . "'selected>" . $comp['desc_comp'] . "</option>";
                        } else {
                            echo "<option value='" . $comp['cod_comp'] . "'>" . $comp['desc_comp'] . "</option>";
                        }
                    } */
                    ?>
                </Select>
            </div> -->
        </div> 
        <div class="row">
            <div class="col-md-4"> 
                <input type="submit" value="enviar" class="btn btn-success">
                <a href="<?php echo getUrl("ResultadoAp","ResultadoAp","consult") ?>"><button type="button" class="btn btn-success">Cancelar</button></a>
            </div>
        </div>
        
    </form>

    <?php

    }
    ?>
</div>