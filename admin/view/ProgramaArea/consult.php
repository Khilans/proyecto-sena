<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
    <button class="btn btn-success btn-sm" id="insertProgArea" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("ProgramaArea", "ProgramaArea", "getModalInsert", false, "ajax"); ?>">Insertar</button>
    <table class="table table-striped mt-5 table-hover table table-bordered " id="tabla">
        <thead class="thead-dark">
            <tr>
                <th>Código</th>
                <th>Descripción area</th>
                <th>Línea tecnológica</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($progarea as $prog) {
                echo "<tr>";
                echo "<td>" . $prog['prog_area_cod'] . "</td>";
                echo "<td>" . $prog['prog_area_desc'] . "</td>";
                echo "<td>" . $prog['lin_tec_desc'] . "</td>";

                /*  echo "<td><a href='" . getUrl("ProgramaArea", "ProgramaArea", "getUpdate", array("prog_area_cod" => $prog['prog_area_cod'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("ProgramaArea", "ProgramaArea", "getDelete", array("prog_area_cod" => $prog['prog_area_cod'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>"; */

                echo "<td class='text-center'>
                <button class='btn btn-warning btn-sm' id='#editProgArea' data-toggle='modal' data-target='#exampleModal' data-url='" . getUrl("ProgramaArea", "ProgramaArea", "getModalUpdate", false, "ajax") . "' data-progAreaEd='" . $prog['prog_area_cod'] . "'>
                <i class='fa fa-edit'></i>                   
                </button>

                <button class='btn btn-danger btn-sm' id='deleteProgArea' data-toggle='modal' data-target='#exampleModal' data-url='" . getUrl("ProgramaArea", "ProgramaArea", "getModalDelete", false, "ajax") . "' data-progAreaDel='" . $prog['prog_area_cod'] . "'>
                <i class='fa fa-trash'></i>                   
                </button>
                </td>";

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