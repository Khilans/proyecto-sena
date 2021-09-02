<div class="container">
<table class="mt-4 table table-bordered table-sm table-hover table-striped " id="tabla">

        <thead class="thead-dark">
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Línea tecnológica</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($progarea as $prog) {
                echo "<tr>";
                 echo "<td>" . $prog['prog_area_cod'] . "</td>"; 
                echo "<td>" . $prog['desc_noticia'] . "</td>";
                echo "<td>" . $prog['titulo_noticia'] . "</td>";
                
                 echo "<td><a href='" . getUrl("ProgramaArea", "ProgramaArea", "getUpdate", array("prog_area_cod" => $prog['prog_area_cod'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("ProgramaArea", "ProgramaArea", "getDelete", array("prog_area_cod" => $prog['prog_area_cod'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>"; 
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