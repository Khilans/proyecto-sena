<div class="container">
<div class="jumbotron">
	<h3 class="display-4">Área de Programa</h3>
</div>
<table class="table table-striped mt-5 table-hover table table-bordered "> 
<!-- <table class="mt-5 table table-bordered table-sm table-hover table-striped table-sm"> -->
<a href="<?php echo getUrl("ProgramaArea", "ProgramaArea", "getInsert") ?>"><button class="btn btn-success mt-4">Insertar</button></a>

        <thead class="thead-dark">
            <tr>
                <th>CÓDIGO</th>
                <th>LÍNEA TECNOLÓGICA</th>
                <th>ÁREA</th>        
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($progarea as $prog) {
                echo "<tr>";
                 echo "<td>" . $prog['prog_area_cod'] . "</td>"; 
                 echo "<td>" . $prog['lin_tec_desc'] . "</td>";
                 echo "<td>" . $prog['prog_area_desc'] . "</td>";
                
                
                 echo "<td><a href='" . getUrl("ProgramaArea", "ProgramaArea", "getUpdate", array("prog_area_cod" => $prog['prog_area_cod'])) . "'><button class='btn btn-outline-primary'>Editar</button></a></td>";
                 echo "<td><a href='" . getUrl("ProgramaArea", "ProgramaArea", "getDelete", array("prog_area_cod" => $prog['prog_area_cod'])) . "'><button class='btn btn-outline-danger'>Eliminar</button></a></td>"; 
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