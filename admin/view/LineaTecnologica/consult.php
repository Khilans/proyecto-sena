<div class="container">
    <table class="table table-striped mt-5 table-hover table table-bordered "> 
        <a href="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
        <thead  class="thead-dark"> 
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
            ?>
        </tbody>
    </table>
</div>