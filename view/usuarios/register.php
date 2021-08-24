<?php
include_once '../lib/helpers.php';

?>

<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Registrar</title>
	<link rel="stylesheet" href="../web/styles/registro.css">
    <link rel="stylesheet" href="../web/styles/bootstrap.css">
</head>
<body>
    <div class="container" id="advanced-search-form">
        <h2>Registrar</h2>
        <form action="<?php echo getUrl("Registro","Registro","getRegister")?>" method="POST">
            <div class="form-group">
                <label for="first-name">Primer nombre</label>
                <input type="text" class="form-control" placeholder="Primer nombre" id="first-name" name="usu_nombre">
            </div>

            <div class="form-group">
                <label for="last-name">Segundo nombre</label>
                <input type="text" class="form-control" placeholder="Segundo nombre" id="last-name" name="usu_nombre2">
            </div>

            <div class="form-group">
                <label for="first-name">Apellidos</label>
                <input type="text" class="form-control" placeholder="Apellidos" id="first-name" name="usu_apellidos">
            </div>

            <div class="form-group">
                <label for="last-name">Tipo documento</label>
                <select name="cod_tipo_doc" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                        foreach($tipos_documentos as $td){
                            echo "<option value'".$td['cod_tipo_doc']."'>".$td['nom_tipo_doc']."</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="number">Numero documento</label>
                <input type="number" class="form-control" placeholder="Numero documento" id="number" number="usu_ndocumento">
            </div>

            <div class="form-group">
                <label>Correo electronico</label>
                <input type="email" class="form-control" placeholder="Correo electronico" name="usu_correo">
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="usu_pass">
                </div>
                <div class="form-group col-md-5">
                    <label>Confirma contraseña</label>
                    <input type="password" class="form-control" placeholder="Confirma contraseña" name="confirm">
                </div>
            </div>
            <button type="submit" class="btn btn-warning btn-lg btn-responsive" id="search"> <span class="glyphicon glyphicon-search"></span>Registrase</button>
        </form>
        <?php
            if (isset($_SESSION['mensaje'])) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show mt-4" id="alerta" role="alert">
                <?php $_SESSION['mensaje'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
            unset($_SESSION['mensaje']);
        }
        ?>
    </div>
</body>
</html>