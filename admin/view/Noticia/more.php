<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Detalles de noticias</h4>        
    </div>
    <?php
        foreach ($detalle as $noti){ 
    ?>
    <div  class="row">
        <div class="col-md-7 form-group">
            <label>Titulo de la noticia</label>
            <input type="text"  readonly name="ttulo_noticia" class="form-control" value="<?php echo $noti['titulo_noticia']; ?>">  
            <label>Descripción de la noticia</label>
            <input type="text"  readonly name="desc_noticia" class="form-control" value="<?php echo $noti['desc_noticia']; ?>">  
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
</div>      