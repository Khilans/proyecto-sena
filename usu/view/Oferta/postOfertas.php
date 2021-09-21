<link rel="stylesheet" href="styles/oferta/Oferta.css" />

<?php
	foreach ($ofertas as $ofer) {
?>
	<div id="wrapper">
		<div id="main">

			<article class="post">
				<header>
					<div class="title">
					<span><a href="#"><?php echo $ofer['nom_oferta']; ?></a></span>
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
				
				</div>
			</article>
		</div>
	</div>
<?php
	}
?>