<div class="container">
    <table class="mt-4 table table-bordered table-sm table-hover table-striped">

        <thead>
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                <th>Titulo</th>
				<th>Imagen</th>
                
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
                
               /*  echo "<td><a href='" . getUrl("Noticia", "Noticia", "getUpdate", array("Cod_Noticia" => $pro['Cod_Noticia'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("Noticia", "Noticia", "getDelete", array("Cod_Noticia" => $pro['Cod_Noticia'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>"; */
                echo "</tr>";
            }
            ?>
            
        </tbody>
    </table>
</div>