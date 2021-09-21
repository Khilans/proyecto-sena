
<div class="home">
  <img src="images/teachers_background.jpg" class="img-fluid" alt="...">

  <div class="col mt-2">
    <p class="h1 text-info">Noticias</p>
    <div class="p-1 mb-2 bg-warning"></div>
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
								<!-- <a href="#" class="author">_______<img src="images/avatar.jpg" alt="" /></a> -->
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