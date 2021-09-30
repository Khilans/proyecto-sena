<?php
include_once '../lib/helpers.php';
?>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Registo</title>
    <link rel="stylesheet" href="../web/styles/estilosRegistro.css">
    <link rel="stylesheet" href="../web/styles/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
</head>

<body>
    <main>
        <h2>Registrarse</h2>
        <form action="<?php echo getUrl("Registro", "Registro", "postRegister") ?>" class="formulario" id="formulario" method="POST">

            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">Primer Nombre*</label>
                <div class="formulario__grupo-input">
                    <input required="required" type="text" class="formulario__input" placeholder="Primer nombre" id="nombre" name="usu_nombre">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Sólo se permiten letras</p>
            </div>

            <div class="formulario__grupo" id="grupo__nombre2">
                <label for="nombre2" class="formulario__label">Segundo Nombre</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" placeholder="Segundo nombre" id="nombre2" name="usu_nombre2">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Sólo se permiten letras</p>
            </div>

            <div class="formulario__grupo" id="grupo__apellidos">
                <label for="apellidos" class="formulario__label">Apellidos*</label>
                <div class="formulario__grupo-input">
                    <input required="required" type="text" class="formulario__input" placeholder="Apellidos" id="apellidos" name="usu_apellido">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Sólo se permiten letras</p>
            </div>

            <div class="formulario__grupo">
                <label for="tipo_doc" class="formulario__label">Tipo Documento*</label>
                <div class="formulario__grupo-input">
                    <select required="required" name="cod_tipo_doc" class="formulario__input" id="tipo_doc">
                        <option value="">Seleccione...</option>
                        <?php
                        foreach ($tipos_documentos as $td) {
                            echo "<option value='" . $td['cod_tipo_doc'] . "'>" . $td['nom_tipo_doc'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
                                   <!-- número documento -->
            <div class="formulario__grupo" id="grupo__numerodoc">
                <label for="numerodoc" class="formulario__label">Número Documento*</label>
                <div class="formulario__grupo-input">
                    <input required="required" type="number" class="formulario__input" placeholder="Número documento" id="numerodoc" name="usu_ndocumento">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Sólo se permiten números</p>
            </div>
                                <!-- correo -->
            <div class="formulario__grupo" id="grupo__correo">
                <label for="correo" class="formulario__label">Correo Electrónico*</label>
                <div class="formulario__grupo-input">
                    <input required="required" type="email" class="formulario__input" placeholder="correo@correo.com" name="usu_correo" id="correo">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Sólo se permiten números,letra,guión y guión bajo</p>
            </div>
                          <!-- contraseña -->
            <div class="formulario__grupo" id="grupo__password">
                <label for="password" class="formulario__label">Contraseña*</label>
                <div class="formulario__grupo-input">
                    <input required="required" type="password" class="formulario__input" name="usu_password" id="password">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos</p>
            </div>

            <div class="formulario__grupo" id="grupo__password2">
                <label for="password2" class="formulario__label">Confirmar Contraseña*</label>
                <div class="formulario__grupo-input">
                    <input required="required" type="password" class="formulario__input" name="usu_password2" id="password2">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Las contraseñas deben ser iguales</p>
            </div>
                      <!-- terminos -->
            <div class="formulario__grupo" id="grupo__terminos">
                <label class="formulario__label">
                    <input class="formulario_checkbox" type="checkbox" name="terminos" id="terminos">
                    Acepto los términos y condiciones
                </label>
            </div>
                                  
            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i><b> Error </b> Por favor rellene todos los campos</p>
            </div>

                      <!--  enviar -->
            <div class="formulario__grupo  formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Enviar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente</p>
            </div>
        </form>
    </main>
     <script src="js/formulario.js"></script> 
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>