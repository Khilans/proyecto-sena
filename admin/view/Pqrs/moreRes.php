<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Detalles</h4>
        <p></p>
    </div>

    <?php
    foreach ($moreRes as $pqR) {
    ?>
        <form action="<?php echo getUrl("Pqrs", "Pqrs", "getMoreRes"); ?>" method="post">

            <div class="row">
                <div class="form-group col-md-4 mt-4">
                    <label>Respuesta del Pqrsf</label>
                    <input type="text" readonly cols="50" name="desc_resp_pqrsf" class="form-control" value="<?php echo $pqR['desc_resp_pqrsf']; ?>">
                    
                </div>
            </div>
        </form>    
    <?Php 
    }
    ?>   
</div>