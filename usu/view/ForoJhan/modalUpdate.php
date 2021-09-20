<?php
foreach ($foros as $foro) {
  ?>
<div class="modal-body">
    <form action="<?php echo getUrl("Foro","Foro","postEditForo")?>" method="post" enctype="multipart/form-data" >
        <div class="news_post_image">
                <center><label><b>Imágen</b></label></center>
                <div id="cambiarImagenForo">
                    <img class="d-block" id="imagen" name="imagen" src="<?php echo $foro['imag_foro'] ?>">
                    <center><button type="button" id="cambioImagenForo" class="btn btn-warning mt-3 mb-3">Cambiar imagen</button></center>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <center><label><b>Título</b></label></center>
                <input type="hidden" name="id_foro" value="<?php echo $foro['cod_foro'];?>">
                <input type="text"  name="titulo_foro" class="form-control text-center" value="<?php echo $foro['titulo_foro'];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" name="desc_foro" id="desc_editada" cols="50" rows="7"><?php echo $foro['desc_foro'];?></textarea>
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