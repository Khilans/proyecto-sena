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
                <th class="text-center w-15">Respuesta</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Código del pqrsf</th>
            </tr>
        </thead>
        <tbody>
        
            <?php
            foreach ($respuesta as $res) {
                echo "<tr>";

                    echo "<td class='text-center'>".$res['cod_resp_pqrsf']."</td>";
                    echo "<td class='text-center'>".$res['desc_resp_pqrsf']."</td>";
                    echo "<td class='text-center'>".$res['fech_resp_pqrsf']."</td>";
                    echo "<td class='text-center'>".$res['cod_pqrsf']."</td>";
                    
                    "</td>";
                echo "</tr>";
            }
            ?>
            
        </tbody>
    </table>
</div>