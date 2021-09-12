
<div class="container">
    <table class="table table-striped table-dark mt-5">
        <a href="<?php echo getUrl("Trol", "Trol", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
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
            foreach ($rol as $rol) {
                echo "<tr>";
                echo "<td>" . $rol['cod_rol'] . "</td>";
                echo "<td>" . $rol['desc_rol'] . "</td>";
                echo "<td><a href='" . getUrl("Trol", "Trol", "getUpdate", array("cod_rol" => $rol['cod_rol'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("Trol", "Trol", "getDelete", array("cod_rol" => $rol['cod_rol'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>



