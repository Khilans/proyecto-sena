<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
    <table class="table table-striped mt-5 table-hover table table-bordered " id="tabla" > 
       <!--  <a href="<?php //echo getUrl("LineaTecnologica", "LineaTecnologica", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a> -->
        <button class="btn btn-success btn-sm" id="insertLinTec" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("LineaTecnologica","LineaTecnologica","getModalInsert",false,"ajax"); ?>">Insertar</button>
 <br><br>
        <thead  class="thead-dark"> 
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lineatecnologica as $linea) {
                echo "<tr>";
                echo "<td>" . $linea['lin_tec_cod'] . "</td>";
                echo "<td>" . $linea['lin_tec_desc'] . "</td>";
               /*echo "<td><a href='" . getUrl("LineaTecnologica", "LineaTecnologica", "getUpdate", array("lin_tec_cod" => $linea['lin_tec_cod'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("LineaTecnologica", "LineaTecnologica", "getDelete", array("lin_tec_cod" => $linea['lin_tec_cod'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>"; */
                echo "<td class='text-center'>
                <button class='btn btn-warning btn-sm' id='editLinTec' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("LineaTecnologica","LineaTecnologica","getModalUpdate",false,"ajax")."' data-LinTecEd='".$linea['lin_tec_cod']."'>
                <i class='fa fa-edit'></i>                   
                </button>

                <button class='btn btn-danger btn-sm' id='deleteLinTec' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("LineaTecnologica","LineaTecnologica","getModalDelete",false,"ajax")."' data-LinTecDel='".$linea['lin_tec_cod']."'>
                <i class='fa fa-trash'></i>                   
                </button>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>