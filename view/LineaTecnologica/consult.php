<div class="container">
    <table class="table table-striped table-dark mt-5">

        <thead>
            <tr>
                <th>Código/th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>          
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lineatec as $linea) {
                echo "<tr>";
                echo "<td>" . $linea['lin_tec_cod'] . "</td>"; 
                echo "<td>" . $linea['lin_tec_desc'] . "</td>";
                
                echo "<td><a href='" . getUrl("LineaTecnologica", "LineaTecnologica", "getUpdate", array("lin_tec_cod" => $linea['lin_tec_cod'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("LineaTecnologica", "LineaTecnologica", "getDelete", array("lin_tec_cod" => $linea['lin_tec_cod'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>"; 
                echo "</tr>";
            }
            ?>
            
        </tbody>
    </table>
</div>