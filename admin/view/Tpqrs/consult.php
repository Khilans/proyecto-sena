<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
<table class="mt-4 table table-bordered table-sm table-hover table-striped " id="tabla">

        <thead class="thead-dark">
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($tpqrs as $pqrs) {
                echo "<tr>";
                 echo "<td>" . $pqrs['cod_pqrsf_tipo'] . "</td>"; 
                echo "<td>" . $pqrs['desc_pqrsf_tipo
                '] . "</td>";
                
                 echo "<td><a href='" . getUrl("Tpqrs", "Tpqrs", "getUpdate", array("cod_pqrsf_tipo" => $pqrs['cod_pqrsf_tipo'])) . "'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='" . getUrl("Tpqrs", "Tpqrs", "getDelete", array("cod_pqrsf_tipo" => $pqrs['cod_pqrsf_tipo'])) . "'><button class='btn btn-danger'>Eliminar</button></a></td>"; 
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