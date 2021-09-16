<?php
	foreach ($noticias as $noti) {
?>
		
<div id="wrapper">
	<div id="main">
		<form action="<?php echo getUrl("Noticia", "Noticia", "getDetalleNoticia"); ?>" method="post" enctype="multipart/form-data">
			<input type='hidden' name='cod_noticia' value="<?php echo $noti['cod_noticia']?>">
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="#"><?php echo $noti['titulo_noticia']?></a></h2>
						<?php
						/* foreach ($tipo_noticias as $tipo_not){
								echo "<p>".$tipo_not['desc_tipo_noti']. "</p>";
						} */
						?>
					</div>
					<div class="meta">
						<time class="published" datetime="2015-11-01"><?php echo $noti['fecha_noticia']?></time>
						<a href="#" class="author">Angie San</span><img src="images/avatar.jpg" alt="" /></a>
					</div>
				</header>
				<span class="image featured"><img class='pic-2' src=" <?php echo $noti['img_noticia'] ?>"></span>			
				<p><?php echo $noti['desc_noticia']?></p>
			</article>
		</form>
	</div>
</div>
		
<?php
	}
?>