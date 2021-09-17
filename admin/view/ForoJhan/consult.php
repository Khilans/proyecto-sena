<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
    <table class="mt-4 table table-bordered table-sm table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th class='text-center'>Inicio-Fin</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($foros as $foro) {
                echo "<tr>";
                echo "<td>" . $foro['cod_foro'] . "</td>";
                echo "<td>" . $foro['titulo_foro'] . "</td>";
                echo "<td class='text-center'>" . $foro['fech_ini_foro'] . "-" . $foro['fech_fin_foro'] . "</td>";
                echo "<td><a href='" . getUrl("LineaTecnologica", "LineaTecnologica", "getUpdate", array("lin_tec_cod" => $foro['cod_foro'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("LineaTecnologica", "LineaTecnologica", "getDelete", array("lin_tec_cod" => $foro['cod_foro'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>