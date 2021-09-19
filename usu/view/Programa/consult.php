<div class="container">
<table class="mt-4 table table-bordered table-sm table-hover table-striped " id="tabla">
<a href="<?php echo getUrl("Programa", "Programa", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Linea</th>
                <th>Nivel</th>
                <th>Nombre</th>
				<th>descripcion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($programas as $prog) {
                echo "<tr>";
                 echo "<td>" . $prog['id_prog'] . "</td>"; 
                echo "<td>" . $prog['lin_tec_desc'] . "</td>";
                echo "<td>" . $prog['nom_prog_niv'] . "</td>";
                echo "<td>" . $prog['nom_prog'] . "</td>";
                echo "<td>" . $prog['desc_prog'] . "</td>";
                 echo "<td><a href='" . getUrl("Programa", "Programa", "getUpdate", array("id_prog" => $prog['id_prog'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("Programa", "Programa", "getDelete", array("id_prog" => $prog['id_prog'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>"; 
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