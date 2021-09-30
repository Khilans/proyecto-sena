<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-success text-center">Responder a este PQRSF</h4>        
    </div>
	<form action="<?php echo getUrl("Pqrs", "Pqrs", "mail"); ?>" method="post">
        <?php
            foreach ($respuesta as $pq){
        ?>
        <div  class="row">
            <div class="col-md-6 form-group">
                <label>Nombre</label>
                <input type="hidden" name="cod_pqrsf" value="<?php echo $pq['cod_pqrsf']; ?>">
                <input type="text" readonly name="nombre" class="form-control" value="<?php echo $pq['nombre']; ?>"> 
            
            </div>
            <div class="col-md-6 form-group">
                <label>Correo</label>
                <input type="text" readonly name="correo" class="form-control" value="<?php echo $pq['correo']; ?>"> 
            </div>
        </div>
        <?php
            }
        ?>
        <div class="row">    
            <div class="col-md-12 form-group">
				<label>Asunto</label>
				<input class="form-control" required="required"  type="text" placeholder="..." name="asunto">
			</div>
		</div>
		<div class="row">    
            <div class="col-md-12 form-group">
				<label>Respuesta</label>
				<textarea class="form-control" required="required"  name="desc_resp_pqrsf" rows="5" cols="50" placeholder="Reponder..."></textarea>
			</div>
		</div>
		<div class="row">
			<div style="margin: 1em;" class="col-md-6">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				<input type="submit" value="Enviar" class="btn btn-success">
            </div> 	
		</div>


	</form>
</div>    