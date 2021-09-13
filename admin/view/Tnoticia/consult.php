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

        <?php
        foreach ($tipo_noticias as $tipo_not) {
            echo "<tr>";
            echo    "<td>" . $tipo_not['cod_tipo_noti'] . "</td>";
            echo    "<td>" . $tipo_not['desc_tipo_noti'] . "</td>";
            echo    "<td><a href='" . getUrl("Tnoticia", "Tnoticia", "getUpdate", array("cod_tipo_noti" => $tipo_not['cod_tipo_noti'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
            echo    "<td><a href='" . getUrl("Tnoticia", "Tnoticia", "getDelete", array("cod_tipo_noti" => $tipo_not['cod_tipo_noti'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>";
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