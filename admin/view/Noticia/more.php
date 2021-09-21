<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">notialles</h4>        
    </div>
    <?php
        foreach ($detalle as $noti){ 
    ?>
    <form action="<?php echo getUrl("Noticia", "Noticia", "More"); ?>" method="post">
        <div  class="row">
            <div class="col-md-7 form-group">
                <label>Descripción</label>
                <input type="hidden" name="cod_noticia" value="<?php echo $noti['cod_noticia']; ?>">
                <input type="text" readonly name="desc_noticia" class="form-control" value="<?php echo $noti['desc_noticia']; ?>">  
            </div>
        </div>
            <?php
                } 
            ?>
        <div class="row">
            <div style="margin: 1em;" class="col-md-6">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div> 	
        </div>
	</form>
</div>      