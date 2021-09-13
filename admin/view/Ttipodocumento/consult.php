
<div class="container">
    <table class="table table-striped table-dark mt-5">
        <a href="<?php echo getUrl("Ttipodocumento", "Ttipodocumento", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
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
            foreach ($tipodocumento as $tipodocu) {
                echo "<tr>";
                echo "<td>" . $tipodocu['cod_tipo_doc'] . "</td>";
                echo "<td>" . $tipodocu['nom_tipo_doc'] . "</td>";
                echo "<td><a href='" . getUrl("Ttipodocumento", "Ttipodocumento", "getUpdate", array("cod_tipo_doc" => $tipodocu['cod_tipo_doc'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("Ttipodocumento", "Ttipodocumento", "getDelete", array("cod_tipo_doc" => $tipodocu['cod_tipo_doc'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>



