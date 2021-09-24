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
                <th class="text-center w-5">ID</th>
                <th class="text-center w-15">Título</th>
                <th class="text-center">Inicio</th>
                <th class="text-center">Fin</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Usuario</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($foros as $foro) {
                

                echo "<tr>";

                    echo "<td class='text-center'>".$foro['cod_foro']."</td>";
                    echo "<td class='text-center'>".$foro['titulo_foro']."</td>";
                    echo "<td class='text-center'>".$foro['fech_ini_foro']."</td>";
                    echo "<td class='text-center'>".$foro['fech_fin_foro']."</td>";
                    echo "<td class='text-center'>".$foro['desc_estado']."</td>";
                    echo "<td class='text-center'>" . $foro['usu_nombre']." ". $foro['usu_apellido'] . "</td>";
                    echo "<td class='text-center'>
                    <button class='btn btn-warning btn-sm' id='modalUpdateForo' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Foro","Foro","getEditForo",false,"ajax")."' data-foro_id='".$foro['cod_foro']."'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn btn-danger btn-sm mx-2' id='modalDeleteForo' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Foro","Foro","getModalDelete",false,"ajax")."' data-id_foro='".$foro['cod_foro']."' ><i class='fa fa-eye-slash'></i>                   
                    </button>
                    <button type='button' class='btn btn-info btn-sm' type='button' id='modalInfoForo' data-toggle='modal' data-target='#exampleModal' data-url='". getUrl('Foro', 'Foro', 'profile', false, 'ajax')."' data-foro_id='".$foro['cod_foro']."'>
                    <i class='fa fa-eye'></i>
                    </button>
                
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>