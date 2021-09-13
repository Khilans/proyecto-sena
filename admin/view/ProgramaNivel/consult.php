<div class="container">
    <div class="jumbotron">
        <h3 class="display-4">Niveles</h3>
    </div>
    <table class="table table-striped mt-5 table-hover table table-bordered ">
        <a href="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
        <thead class="thead-dark">
            <tr>
                <th>CÓDIGO</th>
                <th>NIVEL</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($nivel as $niv) {
                echo "<tr>";
                echo "<td>" . $niv['id_prog_niv'] . "</td>";
                echo "<td>" . $niv['nom_prog_niv'] . "</td>";
                echo "<td><a href='" . getUrl("ProgramaNivel", "ProgramaNivel", "getUpdate", array("id_prog_niv" => $niv['id_prog_niv'])) . "'><button class='btn btn-outline-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("ProgramaNivel", "ProgramaNivel", "getDelete", array("id_prog_niv" => $niv['id_prog_niv'])) . "'><button class='btn btn-outline-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<br>