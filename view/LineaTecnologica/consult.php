<div class="container">
    <table class="table table-striped table-dark mt-5">
        <a href="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
        <thead>
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lineatecnologica as $linea) {
                echo "<tr>";
                echo "<td>" . $linea['lin_tec_cod'] . "</td>";
                echo "<td>" . $linea['lin_tec_desc'] . "</td>";
                echo "<td><a href='" . getUrl("LineaTecnologica", "LineaTecnologica", "getUpdate", array("lin_tec_cod" => $linea['lin_tec_cod'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("LineaTecnologica", "LineaTecnologica", "getDelete", array("lin_tec_cod" => $linea['lin_tec_cod'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
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
</div>