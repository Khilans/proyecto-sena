<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Detalles de pqrsf</h4>
        <p></p>
    </div>

    <?php
    foreach ($more as $pq) {
    ?>
        <form action="<?php echo getUrl("Pqrs", "Pqrs", "getMore"); ?>" method="post">

            <div class="row">
                <div class="form-group col-md-12 mt-4">
                    <label>Descripcion del Pqrsf</label>
                    <textarea class="form-control" readonly name="pqrsf_desc" rows="5" cols="70"><?php echo $pq['pqrsf_desc']; ?></textarea>   
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