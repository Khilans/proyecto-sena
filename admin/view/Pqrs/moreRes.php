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
                    <textarea  readonly name="desc_resp_pqrsf" rows="15" cols="70"><?php echo $pqR['desc_resp_pqrsf']; ?></textarea>   
                </div>
            </div>
        </form>    
    <?Php 
    }
    ?> 
    <div class="row">
        <div style="margin: 1em;" class="col-md-6">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div> 	
    </div> 
</div>