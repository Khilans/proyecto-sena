<div class="container">
<table class="mt-4 table table-bordered table-sm table-hover table-striped " id="tabla">
<a href="<?php echo getUrl("ResultadoAp", "ResultadoAp", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                <!-- <th>Competencia</th> -->
                <th>Editar</th>
                <th>Eliminar</th>  
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($resultados as $res) {
                echo "<tr>";
                echo "<td>" . $res['res_apr_cod'] . "</td>"; 
                echo "<td>" . $res['res_apr_desc'] . "</td>";
                /* echo "<td>" . $res['desc_comp'] . "</td>"; */
                echo "<td><a href='" . getUrl("ResultadoAp", "ResultadoAp", "getUpdate", array("res_apr_cod" => $res['res_apr_cod'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("ResultadoAp", "ResultadoAp", "getDelete", array("res_apr_cod" => $res['res_apr_cod'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>"; 
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