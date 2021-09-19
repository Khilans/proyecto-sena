<div class="container">
    <table class="table table-striped mt-5 table-hover table table-bordered ">
        <a href="<?php echo getUrl("Programa", "Programa", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
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
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
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
                echo "<td><a href='" . getUrl("Programa", "Programa", "getUpdate", array("id_prog" => $prog['id_prog'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("Programa", "Programa", "getDelete", array("id_prog" => $prog['id_prog'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>";
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