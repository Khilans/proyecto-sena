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
        <form>

            <div class="form-group">
                <label for="first-name">Primer nombre</label>
                <input type="text" class="form-control" placeholder="Primer nombre" id="first-name">
            </div>

            <div class="form-group">
                <label for="last-name">Segundo nombre</label>
                <input type="text" class="form-control" placeholder="Segundo nombre" id="last-name">
            </div>

            <div class="form-group">
                <label for="first-name">Apellidos</label>
                <input type="text" class="form-control" placeholder="Apellidos" id="first-name">
            </div>

            <div class="form-group">
                <label for="last-name">Tipo documento</label>
                <input type="text" class="form-control" placeholder="Tipo documento" id="last-name">
            </div>

            <div class="form-group">
                <label for="number">Numero documento</label>
                <input type="number" class="form-control" placeholder="Numero documento" id="number">
            </div>

            <div class="form-group">
                <label for="email">Correo electronico</label>
                <input type="email" class="form-control" placeholder="Correo electronico" id="email">
            </div>

            <div class="clearfix"></div>
            <button type="submit" class="btn btn-warning btn-lg btn-responsive" id="search"> <span class="glyphicon glyphicon-search"></span>Registrase</button>
        </form>
    </div>
</body>
</html>