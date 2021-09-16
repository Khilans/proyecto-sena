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
    <table class="mt-4 table table-bordered table-sm table-hover table-striped " id="tabla">
        <thead class="thead-dark">
            <tr>
                <th class="text-center w-5">Pri Nombre</th>
                <th class="text-center w-15">Seg Nombre</th>
                <th class="text-center">Apellidos</th>
                <th class="text-center">Tipo doc</th>
                <th class="text-center"># Doc</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Acción</th>
            </tr>
        </thead> 
        <tbody>
            <?php
                foreach ($usuarios as $user) {
                echo "<tr>";
                    echo "<td class='text-center'>".$user['usu_nombre']."</td>";
                    echo "<td class='text-center'>".$user['usu_nombre2']."</td>";
                    echo "<td class='text-center'>".$user['usu_apellido']."</td>";
                    echo "<td class='text-center'>".$user['nom_tipo_doc']."</td>";
                    echo "<td class='text-center'>".$user['usu_ndocumento']."</td>";
                    echo "<td class='text-center'>".$user['usu_correo']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn btn-warning btn-sm' id='modalUpdate' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Usuarios","Usuarios","getUpdateModal",false,"ajax")."' data-usu_id='".$user['usu_id']."'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn btn-danger btn-sm' id='modalDelete' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Usuarios","Usuarios","getDeleteModal",false,"ajax")."' data-usu_id='".$user['usu_id']."'>
                    <i class='fa fa-trash'></i>                   
                    </button>
                    <button class='btn btn-info btn-sm' id='modalDelete' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Usuarios","Usuarios","getDeleteModal",false,"ajax")."' data-usu_id='".$user['usu_id']."'>
                    <i class='fa fa-link'></i>                   
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
                   <a href="<?php echo getUrl("Ttipodocumento", "Ttipodocumento", "consult") ?>">
                     <div style="background:#fc7323">
                      <span class="fa fa-users"></span>
                      <p>T.DOCUMENTO</p>
                     </div>
                   </a>
        </li>

        <li class="botonesInicio">
                    
                    <a href="<?php echo getUrl("Trol", "Trol", "consult") ?>">
                       <div style="background:#238276">
                        <span class="fa fa-users"></span>
                        <p>ROL</p>
                       </div>
                    </a>

        </li>

                    

                </ul>

            </div>

        
            <!--====  Fin de INICIO  ====-->

