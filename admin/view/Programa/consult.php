<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
    <table class="table table-striped mt-5 table-hover table table-bordered " id="tabla">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Linea Tecn</th>
                <th>Nivel</th>
                <th>Nombre</th>
                <th>Siglas</th>
                <th>descripcion</th>
                <th>Duración</th>
                <th>Código</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <button class="btn btn-success btn-sm" id="insertPrograma" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Programa","Programa","getModalInsert",false,"ajax"); ?>">Insertar</button>
<br><br>
            <?php
            foreach ($programas as $prog) {
                echo "<tr>";
                echo "<td>" . $prog['id_prog'] . "</td>";
                echo "<td>" . $prog['lin_tec_desc'] . "</td>";
                echo "<td>" . $prog['nom_prog_niv'] . "</td>";
                echo "<td>" . $prog['nom_prog'] . "</td>";
                echo "<td>" . $prog['sigla_prog'] . "</td>";
                echo "<td>" . $prog['desc_prog'] . "</td>";
                echo "<td>" . $prog['duracion_prog'] . "</td>";
                echo "<td>" . $prog['cod_prog'] . "</td>";
                echo "<td><img src='" . $prog['imag_prog'] . "' width='50px'></td>";
                echo "<td class='text-center'>
                <button class='btn btn-warning btn-sm' id='editPrograma' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Programa","Programa","getModalUpdate",false,"ajax")."' data-progEd='".$prog['id_prog']."'>
                <i class='fa fa-edit'></i>                   
                </button>

                <button class='btn btn-danger btn-sm' id='deletePrograma' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Programa","Programa","getModalDelete",false,"ajax")."' data-progDel='".$prog['id_prog']."'>
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
<hr>
<ul>
    <li class="botonesInicio">
        <a href="<?php echo getUrl("Competencia", "Competencia", "consult") ?>">
            <div style="background:#fc7323">
                <span class="fa fa-users"></span>
                <p>COMPETENCIA</p>
            </div>
        </a>
    </li>

    <li class="botonesInicio">

        <a href="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "consult") ?>">
            <div style="background:#238276">
                <span class="fa fa-users"></span>
                <p>LINEA TEC.</p>
            </div>
        </a>
       
    </li>

    <li class="botonesInicio">

        <a href="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "consult") ?>">
            <div style="background:#5fb219">
                <span class="fa fa-users"></span>
                <p>NIVEL PRO.</p>
            </div>
        </a>

    </li>