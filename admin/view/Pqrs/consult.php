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
<table class="mt-4 table table-bordered table-sm table-hover table-striped">

        <thead class="thead-dark">
            <tr>
                <th class="text-center w-5">Id</th>
                <th class="text-center w-15">Tipo pqrs</th>
                <th class="text-center">Usuario</th>
				<th class="text-center">Estado</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Acciones</th>

                
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
                    echo "<td class='text-center'>".$pq['desc_estado']."</td>";
                    echo "<td class='text-center'>".$pq['pqrsf_desc']."</td>";
                    echo "<td class='text-center'>".$pq['pqrsf_fecha']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn btn-warning btn-sm' id='modalnoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Pqrsf","Pqrsf","getModalUpdate",false,"ajax")."' data-pq='".$pq['cod_pqrsf']."'>
                    <i class='fa fa-eye'></i>                   
                    </button>
                    <button class='btn btn-danger btn-sm' id='modalnoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Pqrsf","Pqrsf","getModalDelete",false,"ajax")."' data-notid='".$pq['cod_pqrsf']."'>
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

            </div>