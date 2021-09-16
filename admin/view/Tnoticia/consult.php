<?php
    include_once '../view/partials/modal.php';
?>
<table class="table table-striped table-dark mt-5">

    <thead>
        <tr>
            <th>Id</th>
            <th>Descripción</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
<button class="btn btn-success btn-sm" id="InsertTnoti" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Tnoticia","Tnoticia","getInsert",false,"ajax"); ?>">Insertar</button>
        <?php
        foreach ($tipo_noticias as $tipo_not) {
            echo "<tr>";
            echo    "<td>" . $tipo_not['cod_tipo_noti'] . "</td>";
            echo    "<td>" . $tipo_not['desc_tipo_noti'] . "</td>";
            echo "<td><button class='btn btn-primary btn-sm' id='EditTnoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Tnoticia","Tnoticia","getUpdate",false,"ajax")."' data-TnotiE='".$tipo_not['cod_tipo_noti']."'>Editar</button></td>";
                echo "<td><button class='btn btn-danger btn-sm' id='DeleteTnoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Tnoticia","Tnoticia","getDelete",false,"ajax")."' data-TnotiD='".$tipo_not['cod_tipo_noti']."'>ELiminar</button></td>";
            echo "<tr>";
        }

        if (isset($_SESSION['mensaje'])) {
        ?>
            <div class="alert alert-warning alert-dismissible fade show mt-4" id="alerta" role="alert">
                <?= $_SESSION['mensaje'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
            unset($_SESSION['mensaje']);
        }


        ?>
    </tbody>
</table>