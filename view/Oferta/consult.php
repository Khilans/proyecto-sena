<div class="container">
    <table class="table table-striped table-dark mt-5">
        <a href="<?php echo getUrl("Oferta", "Oferta", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Descripción de la oferta</th>
                <th>Fecha de inicio</th>
                <th>fecha final</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($oferta as $ofer) {
                   
                    echo "<tr>";
                    echo "<td>" . $ofer['id_oferta'] . "</td>";
                    echo "<td>" . $ofer['usu_id'] . "</td>";
                    echo "<td>" . $ofer['desc_oferta'] . "</td>";       
                    echo "<td>" . $ofer['fech_ini_oferta'] . "</td>";
                    echo "<td>" . $ofer['fech_fin_oferta'] . "</td>";                  
                    echo "<td><img src='" . $ofer['imag_oferta'] . "' width='100px'></td>";
                    echo "<td>" . $ofer['desc_estado'] . "</td>";
                    echo "<td><a href='" . getUrl("Oferta", "Oferta", "getUpdate", array("id_oferta" => $ofer['id_oferta'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                    echo "<td><a href='" . getUrl("Oferta", "Oferta", "getDelete", array("id_oferta" => $ofer['id_oferta'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>