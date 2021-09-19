<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
<table class="mt-4 table table-bordered table-sm table-hover table-striped " id="tabla">

        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Tipo pqrs</th>
                <th>Usuario</th>
				<th>Estado</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Ver más</th>
                <th>Reponder</th>

                
            </tr>
        </thead>
        <tbody>
        
            <?php
            foreach ($pqrsf as $pq) {
                echo "<tr>";
                 echo "<td>" . $pq['cod_pqrsf'] . "</td>";
                 echo "<td>" . $pq['desc_pqrsf_tipo'] . "</td>"; 
                 if (isset($pq['usu_id'])){
                    echo "<td>" . $pq['usu_id'] . "</td>";
                 }else{
                     echo "<td>Aninimus</td>";
                 }
                
                echo "<td>" . $pq['desc_estado'] . "</td>";
                echo "<td>" . $pq['pqrsf_desc'] . "</td>";
                echo "<td>" . $pq['pqrsf_fecha'] . "</td>";
               
                
                /*  echo "<td><a href='" . getUrl("Pqrsf", "Pqrsf", "getUpdate", array("cod_pqrsf" => $pq['cod_pqrsf'])) . "'><button class='btn btn-primary'>Editar</button></a></td>"; */
                echo "<td><button class='btn btn-primary btn-sm' id='modalnoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Pqrsf","Pqrsf","getModalUpdate",false,"ajax")."' data-pq='".$pq['cod_pqrsf']."'>Ver más</button></td>";
                echo "<td><button class='btn btn-primary btn-sm' id='modalDeletenoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Pqrsf","Pqrsf","getModalDelete",false,"ajax")."' data-notid='".$pq['cod_pqrsf']."'>Responder</button></td>";
                /* echo "<td><a href='" . getUrl("Pqrsf", "Pqrsf", "getDelete", array("cod_pqrsf" => $pq['cod_pqrsf'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>";  */
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