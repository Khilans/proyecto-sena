<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
    <table class="table table-striped mt-5 table-hover table table-bordered ">
       
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Descripción</th>
                <th>Cupos</th>
                <th>Fecha inicial</th>
                <th>fecha final</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <button class="btn btn-primary btn-sm" id="insertOferta" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Oferta","Oferta","getInsert",false,"ajax"); ?>">Insertar</button>
            <?php
            foreach ($oferta as $ofer) {

                echo "<tr>";
                echo "<td>" . $ofer['id_oferta'] . "</td>";
                echo "<td>" . $ofer['usu_nombre'] . "</td>";
                echo "<td>" . $ofer['desc_oferta'] . "</td>";
                echo "<td>" . $ofer['cupos_oferta'] . "</td>";
                echo "<td>" . $ofer['fech_ini_oferta'] . "</td>";
                echo "<td>" . $ofer['fech_fin_oferta'] . "</td>";
                echo "<td><img src='" . $ofer['imag_oferta'] . "' width='50px'></td>";
                echo "<td>" . $ofer['desc_estado'] . "</td>";
                echo "<td><button class='btn btn-primary btn-sm' id='editOferta' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Oferta","Oferta","getUpdate",false,"ajax")."' data-oferE='".$ofer['id_oferta']."'>Editar</button></td>";
                echo "<td><button class='btn btn-danger btn-sm' id='DeleteOferta' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Oferta","Oferta","getDelete",false,"ajax")."' data-oferD='".$ofer['id_oferta']."'>ELiminar</button></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>