<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
    <button class="btn btn-success btn-sm" id="insertProgNiv" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("ProgramaNivel", "ProgramaNivel", "getModalInsert", false, "ajax"); ?>">Insertar</button>
<br><br>
    <table class="table table-striped mt-5 table-hover table table-bordered " id="tabla">
        <thead class="thead-dark">
            <tr>
                <th>CÓDIGO</th>
                <th>NIVEL</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($nivel as $niv) {
                echo "<tr>";
                echo "<td>" . $niv['id_prog_niv'] . "</td>";
                echo "<td>" . $niv['nom_prog_niv'] . "</td>";
               /*  echo "<td><a href='" . getUrl("ProgramaNivel", "ProgramaNivel", "getUpdate", array("id_prog_niv" => $niv['id_prog_niv'])) . "'><button class='btn btn-outline-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("ProgramaNivel", "ProgramaNivel", "getDelete", array("id_prog_niv" => $niv['id_prog_niv'])) . "'><button class='btn btn-outline-danger'>Eliminar</button></a></td>"; */
                echo "<td class='text-center'>
                <button class='btn btn-warning btn-sm' id='editProgNiv' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("ProgramaNivel","ProgramaNivel","getModalUpdate",false,"ajax")."' data-progNivEd='".$niv['id_prog_niv']."'>
                <i class='fa fa-edit'></i>                   
                </button>

                <button class='btn btn-danger btn-sm' id='deleteProgNiv' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("ProgramaNivel","ProgramaNivel","getModalDelete",false,"ajax")."' data-progNivDel='".$niv['id_prog_niv']."'>
                <i class='fa fa-trash'></i>                   
                </button>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>