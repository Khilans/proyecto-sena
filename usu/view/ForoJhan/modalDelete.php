<?php
foreach ($foros as $foro) {
  ?>
<div class="modal-body">
    <form action="<?php echo getUrl("Foro","Foro","postModalDelete")?>" method="post" enctype="multipart/form-data" >
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading text-center">¿Estás seguro de inhabilitar este Foro?</h4>
                <p>Al confirmar, los demás usuarios no podrán interactuar ni visualizar el Foro que estás a punto de eliminar.</p>
                <hr>
                <p class="mb-0">Cuando necesites habilitarlo, ve a: <b>Panel de control</b> y selecciona la opción <b>Foros</b> y habilítalo.</p>
            </div>
            <input type="hidden" name="id_foro" value="<?php echo $foro['cod_foro'] ?>">
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Confirmar</button>
        </div>
    </form>
</div>
<?php
}
?>