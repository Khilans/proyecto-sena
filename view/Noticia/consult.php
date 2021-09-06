<div class="container">
<table class="mt-4 table table-bordered table-sm table-hover table-striped " id="tabla">
<a href="<?php echo getUrl("Noticia", "Noticia", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                <th>Titulo</th>
				<th>Imagen</th>
                <th>Tipo de noticia</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>

                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($noticias as $noti) {
                echo "<tr>";
                 echo "<td>" . $noti['cod_noticia'] . "</td>"; 
                echo "<td>" . $noti['desc_noticia'] . "</td>";
                echo "<td>" . $noti['titulo_noticia'] . "</td>";
                echo "<td><img src='" . $noti['img_noticia'] . "' width='100px'></td>";
                echo "<td>" . $noti['desc_tipo_noti'] . "</td>";
                echo "<td>" . $noti['desc_estado'] . "</td>";
                
                 echo "<td><a href='" . getUrl("Noticia", "Noticia", "getUpdate", array("cod_noticia" => $noti['cod_noticia'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("Noticia", "Noticia", "getDelete", array("cod_noticia" => $noti['cod_noticia'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>"; 
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