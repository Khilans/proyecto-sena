<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
    <table class="mt-4 table table-bordered table-sm table-hover table-striped" id="tabla">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Código</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Programa</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <button class="btn btn-success btn-sm" id="insertCompetencia" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Competencia", "Competencia", "getModalInsert", false, "ajax"); ?>">Insertar</button>
            <br><br>
            <?php
            foreach ($competencia as $comp) {

                echo "<tr>";

                echo "<td class='text-center'>" . $comp['id_competencia'] . "</td>";
                echo "<td class='text-center'>" . $comp['cod_competencia'] . "</td>";
                echo "<td>" . $comp['desc_competencia'] . "</td>";
                echo "<td class='text-center'>" . $comp['id_prog'] . "</td>";
                echo "<td class='text-center'>
                    <button class='btn btn-warning btn-sm' id='editCompetencia' data-toggle='modal' data-target='#exampleModal' data-url='" . getUrl("Competencia", "Competencia", "getModalUpdate", false, "ajax") . "' data-compEd='" . $comp['id_competencia'] . "'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn btn-danger btn-sm' id='deleteCompetencia' data-toggle='modal' data-target='#exampleModal' data-url='" . getUrl("Competencia", "Competencia", "getModalDelete", false, "ajax") . "' data-compDel='" . $comp['id_competencia'] . "'>
                    <i class='fa fa-trash'></i>                   
                    </button>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>