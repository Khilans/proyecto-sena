<?php
include_once '../view/partials/modal.php';
?>
	<!-- Header -->
	<header class=""> header d-flex flex-row
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>senatel</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="index.php">Inicio</a></li>
						<li class="main_nav_item"><a href="login.php">Sobre nosotros</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "consult") ?>">Línea Tecnológica</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("ProgramaArea", "ProgramaArea", "consult") ?>">Área de Programa</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("ProgramaNivel", "ProgramaNivel", "consult") ?>">Nivel de Programa</a></li>

						<li class="main_nav_item"><a href="<?php echo getUrl("Oferta", "Oferta", "consult") ?>">Ofertas</a></li>

						<li class="main_nav_item"><a href="<?php echo getUrl("Noticia", "Noticia", "getInsert") ?>">Noticias</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("Usuarios", "Usuarios", "consult") ?>">Usuarios</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("Registro", "Registro", "getRegister") ?>">Registro</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("Noticia", "Noticia", "consult") ?>">Blog</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("Programa", "Programa", "getinsert") ?>">programa</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("Competencia", "Competencia", "consult") ?>">Competencia</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("ResultadoAp", "ResultadoAp", "getinsert") ?>">REsultadoAP</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("Configuracion", "Configuracion", "getInsert") ?>">Configuracion</a></li>
						
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<?php if(isset($_SESSION['user_id'])){
				?>
					<div class="btn-group">
						<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo $_SESSION['nombre']; ?>
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<button class="dropdown-item text-center" type="button" id="modalUpdate" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("Usuarios","Usuarios","profile",false,"ajax"); ?>" data-usu_id="<?php echo $_SESSION['user_id']; ?>">Perfil</button>
							<a href="<?php echo getUrl("Acceso","Acceso","logout"); ?>"><button class="dropdown-item text-center" type="button">Cerrar sesión</button></a>
							<a href="<?php echo getUrl("Usuarios","Usuarios","mail",false,"ajax"); ?>"><button class="dropdown-item text-center">Correo</button></a>
						</div>
					</div>
				<?php
			}else{
				?>
				<li class="main_nav_item"><a href="login.php">Inicio de Sesion</a></li>
			<?php
			}
			?>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>