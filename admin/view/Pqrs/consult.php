<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
<?php
        if(isset($_SESSION['mensaje'])){
    ?>
            <div class="alert alert-success mt-4 alert-dismissible fade show" id="alerta" role="alert">
                <?=$_SESSION['mensaje']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <?php
        unset($_SESSION['mensaje']);
        }
    ?>
<table class="mt-4 table table-bordered table-sm table-hover table-striped" id="tabla">

        <thead class="thead-dark">
            <tr>
                <th class="text-center w-5">Id</th>
                <th class="text-center w-15">Tipo pqrs</th>
                <th class="text-center">Usuario</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Correo</th>
				<th class="text-center">Estado</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Acciones</th>
<<<<<<< HEAD
=======

                
<<<<<<< HEAD
=======
>>>>>>> cf315da4aab74c0091170dbce2b13dd391ad14e8
>>>>>>> a8a03d9b6587d68cd533fa0a4eac0a93ba5ef051
            </tr>
        </thead>
        <tbody>
        
            <?php
            foreach ($pqrsf as $pq) {
                echo "<tr>";

                    echo "<td class='text-center'>".$pq['cod_pqrsf']."</td>";
                    echo "<td class='text-center'>".$pq['desc_pqrsf_tipo']."</td>";
                    if (isset($pq['usu_id'])){
                        echo "<td class='text-center'>" . $pq['usu_id'] . "</td>";
                     }else{
                         echo "<td class='text-center'>Aninimus</td>";
                     }
                     echo "<td class='text-center'>".$pq['nombre']."</td>";
                     echo "<td class='text-center'>".$pq['correo']."</td>";
                    echo "<td class='text-center'>".$pq['desc_estado']."</td>";
                    echo "<td class='text-center'>".$pq['pqrsf_desc']."</td>";
                    echo "<td class='text-center'>".$pq['pqrsf_fecha']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn btn-warning btn-sm' id='#' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Pqrsf","Pqrsf","getModalUpdate",false,"ajax")."' data-pq='".$pq['cod_pqrsf']."'>
                    <i class='fa fa-eye'></i>                   
                    </button>
                    <button class='btn btn-danger btn-sm' id='Responder' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Pqrs","Pqrs","getAnswer",false,"ajax")."' data-pqrsRes='".$pq['cod_pqrsf']."'>
                    <i class='fa fa-sms'></i>                   
                    </button>
                    </td>";
                echo "</tr>";
            }
            ?>
            
        </tbody>
    </table>
</div>
<hr>
    <ul>
        <li class="botonesInicio">
            <a href="<?php echo getUrl("Tpqrs", "Tpqrs", "consult") ?>">
                <div style="background:#fc7323">
                      <span class="fa fa-info"></span>
                      <p>T.PQRSF</p>
                </div>
            </a>
        </li>
    </ul>
    <ul>
        <li class="botonesInicio">
            <a href="<?php echo getUrl("Pqrs", "Pqrs", "consultRes") ?>">
                <div style="background:#238276">
                      <span class="fa fa-info"></span>
                      <p>RESPUESTAS <br>PQRSF</p>
                </div>
            </a>
        </li>
    </ul>
</div>