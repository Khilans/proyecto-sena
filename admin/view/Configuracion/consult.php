<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
<table class="mt-4 table table-bordered table-sm table-hover table-striped " id="tabla">
<a href="<?php echo getUrl("Configuracion", "Configuracion", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                <th>Correo</th>
				<th>Dirección</th>
                <th>Telefono</th>
                <th>Editar</th>
                <th>Eliminar</th>

                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($configuracion as $confi) {
                echo "<tr>";
                 echo "<td>" . $confi['id_config'] . "</td>"; 
                echo "<td>" . $confi['desc_config'] . "</td>";
                echo "<td>" . $confi['correo_config'] . "</td>";
                echo "<td>" . $confi['dir_config'] . "</td>";
                echo "<td>" . $confi['tel_config'] . "</td>";
                
                
                /*  echo "<td><a href='" . getUrl("Configuracion", "Configuracion", "getUpdate", array("id_config" => $confi['id_config'])) . "'><button class='btn btn-primary'>Editar</button></a></td>"; */
                echo "<td><button class='btn btn-primary btn-sm' id='modalUpConfi' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Configuracion","Configuracion","getUpdateModal",false,"ajax")."' data-confi='".$confi['id_config']."'>Editar</button></td>";
                echo "<td><button class='btn btn-danger btn-sm' id='modalDeConfi' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Configuracion","Configuracion","getModalDeleteCon",false,"ajax")."' data-confiD='".$confi['id_config']."'>Eliminar</button></td>";
                /* echo "<td><a href='" . getUrl("Configuracion", "Configuracion", "getDelete", array("id_config" => $confi['id_config'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>";  */
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