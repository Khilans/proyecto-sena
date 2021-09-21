<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">


<div class="home">
	<div class="home_background_container prlx_parent">
		<div class="home_background prlx" style="background-image:url(images/noticias.jpg)"></div>
	</div>
	<div class="home_content">
		<h1>NOTICIAS</h1>
	</div>
</div>
<?php
foreach ($noticias as $noti) {
?>

	<div id="wrapper">
		<div id="main">
			<form action="<?php echo getUrl("Noticia", "Noticia", "getDetalleNoticia"); ?>" method="post" enctype="multipart/form-data">
				<input type='hidden' name='cod_noticia' value="<?php echo $noti['cod_noticia'] ?>">
				<div style="margin: 8em;" class="col-md-9">
					<article class="post">
						<header>
							<div class="title">
								<h2><?php echo $noti['titulo_noticia'] ?></h2>
							</div>
							<div class="meta">
								Fecha de publicación<time class="published" datetime="2015-11-01"><?php echo $noti['fecha_noticia'] ?></time>
								</div>
						</header>
						<span class="image featured"><img class='pic-2' src="<?php echo $noti['img_noticia'] ?>"></span>
						<p><?php echo $noti['desc_noticia'] ?></p>
					</article>
				</div>
			</form>
		</div>
	</div>

<?php
}
?>