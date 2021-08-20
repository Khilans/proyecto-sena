<div class="container">
    <table class="table table-striped table-dark mt-5">

        <thead>
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                <th>Titulo</th>
				<th>Imagen</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>

                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($noticias as $not) {
                echo "<tr>";
                 echo "<td>" . $not['cod_noticia'] . "</td>"; 
                echo "<td>" . $not['desc_noticia'] . "</td>";
                echo "<td>" . $not['titulo_noticia'] . "</td>";
                echo "<td><img src='" . $not['img_noticia'] . "' width='100px'></td>";
                echo "<td>" . $not['desc_estado'] . "</td>";
                
                 echo "<td><a href='" . getUrl("Noticia", "Noticia", "getUpdate", array("cod_noticia" => $not['cod_noticia'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("Noticia", "Noticia", "getDelete", array("cod_noticia" => $not['cod_noticia'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>"; 
                echo "</tr>";
            }
            ?>
            
        </tbody>
    </table>
</div>