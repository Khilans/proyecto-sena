<link rel="stylesheet" type="text/css" href="styles/news_styles1.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
<!-- News -->

<div class="news" style="margin-top:5%;">
		<div class="container">
			<div class="row">
				
				<!-- News Column -->

				<div class="col-lg-8" id="div_post">
					<?php
                    foreach($posts as $p){
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
								<p><?php echo substr($p['desc_foro'],0,200);?> <b>Leer más...</b></p>
							</div>
						<form action="<?php echo getUrl("Foro","Foro","post"); ?>" method="post">
									<input type="hidden" name="foro_id" value="<?php echo $p['cod_foro'] ?>">
									<button class="btn news_post_button text-center trans_200" type="submit"><b>Ver más</b></button>
						</form>
						</div>
					</div>
                        <?php
                    }
                        ?>

					

					<!-- Page Nav -->

					<nav aria-label="Page navigation example">
					<ul class="pagination pagination-lg">
						<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
						</li>
					</ul>
					</nav>

				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Latest Posts -->

						<div class="sidebar_section">

						<div class="sidebar_section_title mb-4">
								<h3>Filtro</h3>
								<input type="text" id="filtro" class="form-control" palceholder="Busca un Foro por título" data-url="<?php echo getUrl("Foro","Foro","filtro",false,"ajax"); ?>">
							</div>
							
							<?php
							if(!isset($_SESSION['rol'])){
							}else{ if($_SESSION['rol']==1 || $_SESSION['rol']==3){
								?>
							
								<div class="latest_post">
									<div class="latest_post_image">
										<div class="jumbotron text-center"><a href="<?php echo getUrl("Foro","Foro","getNewPost") ?>"><h2 class="display-6">Crea un Foro</h2></a></div>
									</div>
								</div>
							<?php
							}
						}
							?>

							<div class="sidebar_section_title">
								<h3>Recientes</h3>
							</div>
							
							<div class="latest_posts">
								
								<!-- Latest Post -->
								<?php 
								$contador=0;
								foreach($recientes as $reciente){
									$contador++;
									if($contador<5){
									?>
									<div class="latest_post">
										<div class="latest_post_image" style="width:350px">
											<img src="<?php echo $reciente['imag_foro']; ?>" alt="https://unsplash.com/@dsmacinnes">
										</div>
										<div class="latest_post_title"><a href="news_post.html"><?php echo $reciente['titulo_foro']; ?></a></div>
										<div class="latest_post_meta">
											<span class="latest_post_author"><a href="#"><b>Por <?php echo $reciente['imag_foro']; ?></b></a></span>
											<span>|</span>
											<span class="latest_post_comments"><a href="#"><b>3 Comments</b></a></span>
										</div>
									</div>
								<?php
								}
							}
								?>

							</div>
								
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>