<?php
include_once '../view/partials/modal.php';
?>
<!-- Header -->
<header class=">header d-flex flex-row"
	<div class="header_content d-flex flex-row align-items-center">
		<!-- Logo -->
		<div class="logo_container">
			<div class="logo ">
				<span>senatel</span>
			</div>
		</div>

		<!-- Main Navigation -->
		<nav class="main_nav_container ">
			<div class="main_nav">
				<ul class="main_nav_list">
					<li class="main_nav_item" bg-color="green"><a href="index.php">Inicio</a></li>
					<?php
					if (isset($_SESSION['user_id'])) {
					?>
						<li class="main_nav_item"><a href="<?php echo getUrl("Pqrs", "Pqrs", "getSend") ?>">PQRSF</a></li>
					<?php
					} else {
						echo "<li class='main_nav_item'><a href=" . getUrl('Pqrs', 'Pqrs', 'getSendU') . ">Pqrsf</a></li>";
					}
					?>

					<li class="main_nav_item"><a href="<?php echo getUrl("Foro", "Foro", "feed") ?>">Foros</a></li>
					<li class="main_nav_item"><a href="<?php echo getUrl("Oferta", "Oferta", "getOferta") ?>">Ofertas</a></li>
					<li class="main_nav_item"><a href="<?php echo getUrl("Noticia", "Noticia", "getView") ?>">Noticias</a></li>

				</ul>
			</div>
		</nav>
	</div>
	<div class="header_side d-flex flex-row justify-content-center align-items-center">
		<?php if (isset($_SESSION['user_id'])) {
		?>
			<div class="btn-group">
				<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo $_SESSION['nombre']; ?>
				</button>
				<div class="dropdown-menu dropdown-menu-right">
					<button class="dropdown-item text-center" type="button" id="modalUpdate" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("Usuarios", "Usuarios", "profile", false, "ajax"); ?>" data-usu_id="<?php echo $_SESSION['user_id']; ?>">Perfil</button>
					<a href="<?php echo getUrl("Usuarios", "Usuarios", "mail", false, "ajax"); ?>"><button class="dropdown-item text-center">Correo</button></a>
					<?php
					if ($_SESSION['rol'] == 1) {
						echo "<a href='../../admin/web/index.php'><button class='dropdown-item text-center' type='button'>Panel de control</button></a>";
					}
					?>
					<a href="<?php echo getUrl("Acceso", "Acceso", "logout"); ?>"><button class="dropdown-item text-center" type="button">Cerrar sesión</button></a>

				</div>
			</div>
		<?php
		} else {
		?>
			<li class="main_nav_item"><a href="login.php">Inicio de Sesion</a></li>
		<?php
		}
		?>
	</div>

</header>