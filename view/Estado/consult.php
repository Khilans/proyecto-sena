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
        foreach ($estados as $estd) {
            echo "<tr>";
            echo    "<td>" . $estd['id_estado'] . "</td>";
            echo    "<td>" . $estd['desc_estado'] . "</td>";
            echo    "<td><a href='" . getUrl("Estado", "Estado", "getUpdate", array("id_estado" => $estd['id_estado'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
            echo    "<td><a href='" . getUrl("Estado", "Estado", "getDelete", array("id_estado" => $estd['id_estado'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>";
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