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
                <th class="text-center w-5">Código</th>
                <th class="text-center w-15">Descripción</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <button class="btn btn-success btn-sm" id="InsertRol" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Trol","Trol","getInsert",false,"ajax"); ?>">Insertar</button>
           <br><br>
           <?php
            foreach ($rol as $rol) {
                echo "<tr>";
                    echo "<td class='text-center'>".$rol['cod_rol']."</td>";
                    echo "<td class='text-center'>".$rol['desc_rol']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn btn-warning btn-sm' id='EditRol' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Trol","Trol","getUpdate",false,"ajax")."' data-rol='".$rol['cod_rol']."'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn btn-danger btn-sm' id='DeleteRol' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Trol","Trol","getDelete",false,"ajax")."' data-rolD='".$rol['cod_rol']."'>
                    <i class='fa fa-trash'></i>                   
                    </button>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>



