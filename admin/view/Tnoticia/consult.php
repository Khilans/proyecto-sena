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
<table class="mt-4 table table-bordered table-sm table-hover table-striped " >

<thead class="thead-dark">
        <tr>
            <th class="text-center w-5">Id</th>
            <th class="text-center w-15">Descripción</th>
            <th class="text-center">Acciones</th>

        </tr>
    </thead>
    <tbody>
<button class="btn btn-success btn-sm" id="InsertTnoti" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Tnoticia","Tnoticia","getInsert",false,"ajax"); ?>">Insertar</button>
        <?php
        foreach ($tipo_noticias as $tipo_not) {
            
            echo "<tr>";
            echo    "<td class='text-center'>" . $tipo_not['cod_tipo_noti'] . "</td>";
            echo    "<td class='text-center'>" . $tipo_not['desc_tipo_noti'] . "</td>";
            echo "<td class='text-center'>
            <button class='btn btn-warning btn-sm' id='EditTnoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Tnoticia","Tnoticia","getUpdate",false,"ajax")."' data-TnotiE='".$tipo_not['cod_tipo_noti']."'>
            <i class='fa fa-edit'></i>                   
            </button>
            <button class='btn btn-danger btn-sm' id='DeleteTnoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Tnoticia","Tnoticia","getDelete",false,"ajax")."' data-TnotiD='".$tipo_not['cod_tipo_noti']."'>
            <i class='fa fa-trash'></i>                   
            </button>
            </td>";
        echo "</tr>";
        }


        ?>
    </tbody>
</table>