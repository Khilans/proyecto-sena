<link rel="stylesheet" href="styles/oferta/Oferta.css" />
<?php
	foreach ($ofertas as $ofer) {
?>
	<div id="wrapper">
		<div id="main">

			<article class="post">
				<header>
					<div class="title">
					<span><a href="#"><?php echo $ofer['desc_oferta']; ?></a></span>
						<!-- <p>Sub titulo de la oferta</p> -->
						<!-- <a href=""><button type="button" class="btn btn-secondary">Disponible</button></a> -->
					</div>
					<div class="meta">
						<time class="published" datetime="2015-11-01">Fecha inicio:
							<?php echo $ofer['fech_ini_oferta']?></time>
						<time class="published" datetime="2015-11-01">FEcha fin:
							<?php echo $ofer['fech_fin_oferta']?></time>
					</div>
				</header>
				<span class="image featured"><img class='pic-2' src="<?php echo $ofer['imag_oferta']?>"></span>
				<div class="fondo">
					<div>
						<h2>Acerca de la oferta</h2>
						<p><?php echo $ofer['desc_oferta']?></p>
					</div>
					<div>
						<h5>Numero de cupos disponibles:</h5>
						<?php echo $ofer['cupos_oferta']?>
					</div>
					<center>
						<a href="#"></a><button type="button" class="btn btn-success" style="margin-bottom: 20px; ">reservar</button></a>
					</center>
					<center>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.6684695040644!2d-76.49362068524188!3d3.430634397502953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a71a83f469d3%3A0xeb602ca40963938!2sSena%20Pondaje!5e0!3m2!1ses-419!2sco!4v1631251912479!5m2!1ses-419!2sco" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</center>
				</div>
			</article>
		</div>
	</div>
<?php
	}
?>