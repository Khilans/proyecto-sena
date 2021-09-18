<link rel="stylesheet" type="text/css" href="styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
<!-- News -->

<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Column -->

				<div class="col-lg-8">
					<?php
                    foreach($foro as $p){
                        ?>
					<div class="news_posts">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?php echo $p['imag_foro']; ?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
				
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="#"><?php echo $p['titulo_foro']; ?></a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por <?php echo $p['usu_nombre']; ?> <?php echo $p['usu_apellido']; ?></a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p><?php echo substr($p['desc_foro'],0,200);?> Leer más...</p>
							</div>
						<form action="<?php echo getUrl("Foro","Foro","post"); ?>" method="post">
									<input type="hidden" name="foro_id" value="<?php echo $p['cod_foro'] ?>">
									<button class="btn news_post_button text-center trans_200" type="submit">Ver más</button>
						</form>
						</div>
					
                        <?php
                    }
                        ?>

					</div>
				</div>
			</div>
		</div>
	</div>