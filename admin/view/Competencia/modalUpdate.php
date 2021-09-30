<div class="container">
    <div class="alert-success" role="alert">
        <h4 class="alert text-center">EDITAR COMPETENCIAS</h4>
        <p>Por favor llenar los campos con *</p>
    </div>
    <div class="container">
        <?php
        foreach ($competencia as $comp) {
        ?>
            <div class="modal-body">
                <form action="<?php echo getUrl("Competencia", "Competencia", "postUpdate") ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Código</label>
                             <input type="hidden" name="id_competencia" value="<?php echo $comp['id_competencia']; ?>"> 
                            <input type="number" name="cod_competencia" class="form-control" value="<?php echo $comp['cod_competencia']; ?>">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Competencia</label>
                            <!-- <input type="hidden" name="id_competencia" value="<?php //echo $comp['id_competencia']; ?>"> -->
                            <input type="text" name="desc_competencia" class="form-control" value="<?php echo $comp['desc_competencia']; ?>">
                        </div>

                        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Confirmar</button>
                    </div>
                </form>
            </div>
        <?php
        }
        ?>
    </div>
</div>