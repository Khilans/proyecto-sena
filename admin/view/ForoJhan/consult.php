<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
    <table class="mt-4 table table-bordered table-sm table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th class='text-center'>ID</th>
                <th>Título</th>
                <th class='text-center'>Inicio-Fin</th>
                <th class='text-center'>Usuario</th>
                <th class='text-center'>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($foros as $foro) {
                echo "<tr>";
                echo "<td class='text-center'>" . $foro['cod_foro'] . "</td>";
                echo "<td>" . $foro['titulo_foro'] . "</td>";
                echo "<td class='text-center'>" . $foro['fech_ini_foro'] . "-" . $foro['fech_fin_foro'] . "</td>";
                echo "<td class='text-center'>" . $foro['usu_nombre']." ". $foro['usu_apellido'] . "</td>";
                echo "<td class='text-center'><a href='" . getUrl("Foro", "Foro", "getModalUpdate", array("foro_id" => $foro['cod_foro'])) . "'><button class='btn btn-danger btn-sm'>Eliminar</button></a>
                <button type='button' class='btn btn-warning btn-sm' type='button' id='modalUpdateForo' data-toggle='modal' data-target='#exampleModal' data-url='". getUrl('Foro', 'Foro', 'getModalEdit', false, 'ajax')."' data-foro_id='".$foro['cod_foro']."'>Editar</button>
                <button type='button' class='btn btn-info btn-sm' type='button' id='modalInfoForo' data-toggle='modal' data-target='#exampleModal' data-url='". getUrl('Foro', 'Foro', 'profile', false, 'ajax')."' data-foro_id='".$foro['cod_foro']."'>Detalles</button>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>