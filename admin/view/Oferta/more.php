<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Detalles de ofertas</h4>        
    </div>
    <?php
        foreach ($detalleO as $d){ 
    ?>
    <div  class="row">
        <div class="col-md-7 form-group">
            <label>Nombre de la ofertas</label>
            <input type="text"  readonly name="nom_oferta" class="form-control" value="<?php echo $d['nom_oferta']; ?>">  
            <label>Descripción de la oferta</label>
            <textarea  readonly name="desc_oferta" rows="15" cols="70"><?php echo $d['desc_oferta']; ?></textarea>   
         </div>
    </div>
    <?php
        } 
    ?>
    <div class="modal-footer">
        <div  class="col-md-2">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div> 	
    </div>
</div>  