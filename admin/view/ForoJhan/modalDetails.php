<?php
foreach ($foros as $foro) {
  ?>
<link rel="stylesheet" type="text/css" href="styles/news_post_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_post_responsive.css"> 
<div class="modal-body">
   	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Post Column -->

				<div class="col-lg-8">
					
					<div class="news_post_container">
						<!-- News Post -->
						<?php
						foreach($foro as $f){
							$id_foro=$f['cod_foro'];
						?>
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?php echo $f['imag_foro']; ?>" alt="<?php echo $f['imag_foro']; ?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>18</div>
										<div>dec</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html"><?php echo $f['titulo_foro']; ?></a> 
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por <?php echo $f['usu_nombre'] ?> <?php echo $f['usu_apellido'] ?></a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#"> Comentarios</a></span>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p><?php echo $f['desc_foro'] ?></p>
							</div>

						

						</div>
					<?php 
						}
					?>
					</div>
</div>
<?php
}
?>