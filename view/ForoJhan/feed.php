<link rel="stylesheet" type="text/css" href="styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
<!-- News -->

<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Column -->

				<div class="col-lg-8">
					<?php
                    foreach($posts as $p){
                        ?>
					<div class="news_posts">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="images/news_1.jpg" alt="https://unsplash.com/@dsmacinnes">
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
										<a href="news_post.html"><?php echo $p['titulo_foro']; ?></a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p><?php echo substr($p['desc_foro'],0,200);?> Leer más...</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<form action="<?php echo getUrl("Foro","Foro","post"); ?>" method="post">
									<input type="hidden" name="foro_id" value="<?php echo $p['cod_foro'] ?>">
									<button type="submit" class="btn btn-warning" value="Enviar"></button>
								</form>
							</div>
						</div>
					</div>
                        <?php
                    }
                        ?>

					

					<!-- Page Nav -->

					<div class="news_page_nav">
						<ul>
							<li class="active text-center trans_200"><a href="#">01</a></li>
							<li class="text-center trans_200"><a href="#">02</a></li>
							<li class="text-center trans_200"><a href="#">03</a></li>
						</ul>
					</div>

				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Latest Posts -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Recientes</h3>
							</div>
							
							<div class="latest_posts">
								
								<!-- Latest Post -->

								<div class="latest_post">
									<div class="latest_post_image">
										<div class="jumbotron text-center"><a href="<?php echo getUrl("Foro","Foro","getNewPost") ?>"><h2 class="display-6">Crea un Foro</h2></a></div>
									</div>
								</div>

								<div class="latest_post">
									<div class="latest_post_image">
										<img src="images/latest_1.jpg" alt="https://unsplash.com/@dsmacinnes">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>
								
							</div>
								
						</div>

						<!-- Tags -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Tags</h3>
							</div>
							<div class="tags d-flex flex-row flex-wrap">
								<div class="tag"><a href="#">Course</a></div>
								<div class="tag"><a href="#">Design</a></div>
								<div class="tag"><a href="#">FAQ</a></div>
								<div class="tag"><a href="#">Teachers</a></div>
								<div class="tag"><a href="#">School</a></div>
								<div class="tag"><a href="#">Graduate</a></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>