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
        <a href="<?php echo getUrl("Ttipodocumento", "Ttipodocumento", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
    <br><br>
        <thead class="thead-dark">
            <tr>
                <th class="text-center w-5">Código</th>
                <th class="text-center w-15">Descripción</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($tipodocumento as $tipodocu) {
                echo "<tr>";
                    echo "<td class='text-center'>".$tipodocu['cod_tipo_doc']."</td>";
                    echo "<td class='text-center'>".$tipodocu['nom_tipo_doc']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn btn-warning btn-sm' id='modalUpdate' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Ttipodocumento","Ttipodocumento","getUpdateModal",false,"ajax")."' data-cod_tipo_doc='".$tipodocu['cod_tipo_doc']."'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn btn-danger btn-sm' id='modalDelete' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Ttipodocumento","Ttipodocumento","getDeleteModal",false,"ajax")."' data-cod_tipo_doc='".$tipodocu['cod_tipo_doc']."'>
                    <i class='fa fa-trash'></i>                   
                    </button>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>



