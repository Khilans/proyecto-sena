<?php
foreach ($competencia as $comp) {
?>
    <div class="modal-body">
        <form action="<?php echo getUrl("Competencia", "Competencia", "postUpdate") ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Competencia</label>
                    <input type="hidden" name="id_competencia" value="<?php echo $comp['id_competencia']; ?>">
                    <input type="text" name="desc_competencia" class="form-control" value="<?php echo $comp['desc_competencia']; ?>">
                </div>
            </div>
            <div class=" form-group col-md-4">
                <label>Programa</label>
                <select name="id_prog" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                    foreach ($programa as $prog) {
                        if ($prog['id_prog'] == $comp['id_prog']) {

                            echo "<option value='" . $prog['id_prog'] . "'selected>" . $prog['desc_prog'] . "</option>";
                        } else {
                            echo "<option value='" . $prog['id_prog'] . "'>" . $prog['desc_prog'] . "</option>";
                        }
                    }
                    ?>
                </Select>
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