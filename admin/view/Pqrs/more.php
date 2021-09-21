<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Detalles</h4>
        <p></p>
    </div>

    <?php
    foreach ($more as $pq) {
    ?>
        <form action="<?php echo getUrl("Pqrs", "Pqrs", "getMore"); ?>" method="post">

            <div class="row">
                <div class="form-group col-md-4 mt-4">
                    <label>Descripcion del Pqrsf</label>
                    <input type="text" readonly cols="50" name="pqrsf_desc" class="form-control" value="<?php echo $pq['pqrsf_desc']; ?>">
                    
                </div>
            </div>
        </form>    
    <?Php 
    }
    ?>   
</div>     