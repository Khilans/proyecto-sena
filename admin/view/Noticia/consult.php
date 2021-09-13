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
    <a href="<?php echo getUrl("Noticia", "Noticia", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
    <br><br>
        <thead class="thead-dark">
            <tr>
                <th class="text-center w-5">Id</th>
                <th class="text-center w-15">Descripción</th>
                <th class="text-center">Titulo</th>
                <th class="text-center">Imagen</th>
                <th class="text-center">Tipo de noticia</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($noticias as $noti) {
                echo "<tr>";
                    echo "<td class='text-center'>".$noti['cod_noticia']."</td>";
                    echo "<td class='text-center'>".$noti['desc_noticia']."</td>";
                    echo "<td class='text-center'>".$noti['titulo_noticia']."</td>";
                    echo "<td class='text-center'><img src='".$noti['img_noticia']."' width='100px'</td>";
                    echo "<td class='text-center'>".$noti['desc_tipo_noti']."</td>";
                    echo "<td class='text-center'>".$noti['desc_estado']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn btn-warning btn-sm' id='modalUpdate' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Noticia","Noticia","getUpdateModal",false,"ajax")."' data-cod_noticia='".$noti['cod_noticia']."'>
                    <i class='fi-rr-edit'></i>                   
                    </button>
                    <button class='btn btn-danger btn-sm' id='modalDelete' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Noticia","Noticia","getDeleteModal",false,"ajax")."' data-cod_noticia='".$noti['cod_noticia']."'>
                    <i class='fi-rr-user-delete'></i>                   
                    </button>
                    </td>"; 
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