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
						<li class="main_nav_item"><a href="<?php echo getUrl("LineaTecnologica","LineaTecnologica","consult")?>">LineaTecnologica</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("Noticia","Noticia","getInsert")?>">Noticias</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("Usuarios","Usuarios","consult")?>">Usuarios</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("Registro","Registro","getRegister")?>">Registro</a></li>
						<li class="main_nav_item"><a href="<?php echo getUrl("Noticia","Noticia","consult")?>">Blog</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>Prueba</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>