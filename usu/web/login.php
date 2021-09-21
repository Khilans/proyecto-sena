<?php
include_once '../lib/helpers.php';

?>

<html lang="es">

<head>
	<meta charset="utf-8">

	<title>Inicio de sesión</title>
	<link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">

	<title>inicio de sesión</title>
	<link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/bootstrap.css">

</head>


<body>

	    <div class="container" id="login-form">
        <div class="image"></div>
        <div class="frm">
            <h1>Iniciar sesion</h1>




            <form action="<?php echo getUrl("Acceso", "Acceso", "login") ?>" method="POST">
                <div class="form-group">
                    <label for="username">Numero de documento:</label>
                    <input  required="required"  type="number" class="form-control" name="usu_ndocumento" placeholder="Numero de identidad">
                </div>
                <div class="form-group">
                    <label for="pwd">Contraseña:</label>
                    <input  required="required"  type="password" class="form-control" name="usu_pass" placeholder="Contraseña">

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Ingresar</button>
                </div>
                <div class="form-group">
                <a href="<?php echo getUrl("Registro", "Registro", "getRegister", false, "ajax"); ?>"><button type="button" class="btn btn-warning">Registrarse</button></a>
                </div>
            
        </div>
    </div>
		<?php

		if (isset($_SESSION['mensaje'])) {
		?>
			<p class="text-danger"><?= $_SESSION['mensaje'] ?></p>
		<?php
			unset($_SESSION['mensaje']);
		}
		?>

	</form>

</body>
</html>