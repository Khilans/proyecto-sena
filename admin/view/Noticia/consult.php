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
<<<<<<< HEAD
                <th class="text-center w-5">Id</th>
                <th class="text-center w-15">Descripción</th>
                <th class="text-center">Titulo</th>
				<th class="text-center">Imagen</th>
                <th class="text-center">Tipo de noticia</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Acciones</th>
 
=======
                <th>Id</th>
                <th>Descripción</th>
                <th>Titulo</th>
                <th>Fecha de creación</th>
				<th>Imagen</th>
                <th>Tipo de noticia</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>

                
>>>>>>> 418e783ca7805215ff1b81c96851eae64c4a5700
            </tr>
        </thead>
        <tbody>
        <button class="btn btn-success mt-4" id="modalInsertnoti" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Noticia","Noticia","getModalInsert",false,"ajax"); ?>">Insertar</button>
          <br><br>
            <?php
            foreach ($noticias as $noti) {

                echo "<tr>";
<<<<<<< HEAD
                    echo "<td class='text-center'>".$noti['cod_noticia']."</td>";
                    echo "<td class='text-center'>".$noti['desc_noticia']."</td>";
                    echo "<td class='text-center'>".$noti['titulo_noticia']."</td>";
                    echo "<td><img src='" . $noti['img_noticia'] . "' width='100px'></td>";
                    echo "<td class='text-center'>".$noti['desc_tipo_noti']."</td>";
                    echo "<td class='text-center'>".$noti['desc_estado']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn btn-warning btn-sm' id='modalnoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Noticia","Noticia","getModalUpdate",false,"ajax")."' data-noti='".$noti['cod_noticia']."'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn btn-danger btn-sm' id='modalDeletenoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Noticia","Noticia","getModalDelete",false,"ajax")."' data-noti='".$noti['cod_noticia']."'>
                    <i class='fa fa-trash'></i>                   
                    </button>
                    </td>";
=======
                 echo "<td>" . $noti['cod_noticia'] . "</td>"; 
                echo "<td>" . $noti['desc_noticia'] . "</td>";
                echo "<td>" . $noti['titulo_noticia'] . "</td>";
                echo "<td>" . $noti['fecha_noticia'] . "</td>";
                echo "<td><img src='" . $noti['img_noticia'] . "' width='100px'></td>";
                echo "<td>" . $noti['desc_tipo_noti'] . "</td>";
                echo "<td>" . $noti['desc_estado'] . "</td>";
                
               
                echo "<td><button class='btn btn-primary btn-sm' id='modalnoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Noticia","Noticia","getModalUpdate",false,"ajax")."' data-noti='".$noti['cod_noticia']."'>Editar</button></td>";
                echo "<td><button class='btn btn-primary btn-sm' id='modalDeletenoti' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Noticia","Noticia","getModalDelete",false,"ajax")."' data-notid='".$noti['cod_noticia']."'>ELiminar</button></td>";
               
>>>>>>> 418e783ca7805215ff1b81c96851eae64c4a5700
                echo "</tr>";
             }
            ?>
            
        </tbody>
    </table>
</div>
<hr>
    <ul>
        <li class="botonesInicio">
            <a href="<?php echo getUrl("Tnoticia", "Tnoticia", "consult") ?>">
                <div style="background:#fc7323">
                    <span class="fa fa-users"></span>
                    <p>T.NOTI</p>
                </div>
            </a>
        </li>
    </ul>
</hr>