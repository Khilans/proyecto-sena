<link rel="stylesheet" type="text/css" href="styles/news_post_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_post_responsive.css">
    <!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/news_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>The News</h1>
		</div>
	</div>

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
						?>
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
										<a href="news_post.html"><?php echo $f['titulo_foro']; ?></a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por <?php echo $f['usu_nombre'] ?> <?php echo $f['usu_apellido'] ?></a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#">3 Comments</a></span>
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
					
					<!-- Comments -->
					<div class="news_post_comments">
						<div class="comments_title">Comentarios</div>
						<ul class="comments_list">
							
							<!-- Comment -->
							<?php foreach($comentarios as $comentario){
								?>
							<li class="comment">
								<div class="comment_container d-flex flex-row">
									<div>
										<div class="comment_image">
											<img src="images/comment_1.jpg" alt="">
										</div>
									</div>
									<div class="comment_content">
										<div class="comment_meta">
											<span class="comment_name"><a href="#"><?php echo $comentario['usu_nombre']; ?> <?php echo $comentario['usu_apellido']; ?></a></span>
											<span class="comment_separator">|</span>
											<span class="comment_date"><?php echo $comentario['fech_foro_com']; ?></span>
											<span class="comment_separator">|</span>
											<!-- <span class="comment_reply_link"><a href="#">Responder</a></span> -->
										</div>
										<p class="comment_text"><?php echo $comentario['com_foro_com']; ?></p>
									</div>
								</div>
							</li>
							<?php
							}
							?>
						</ul>

					</div>

					<!-- Leave Comment -->

					<div class="leave_comment">
						<div class="leave_comment_title">Deja un comentario</div>

						<div class="leave_comment_form_container">
							<form action="<?php echo getUrl("Foro","Foro","sendComment") ?>" method="post">
								<?php foreach($foro as $f){
									echo "<input type='hidden' name='foro_id' value='".$f['cod_foro']."'> ";
								}
								?>
                                <textarea id="comment_form_message" class="text_field contact_form_message" name="comentario" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
								<button id="comment_send_btn" type="submit" class="comment_send_btn trans_200" value="Submit">Enviar comentario</button>

							</form>
						</div>
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
										<img src="images/latest_1.jpg" alt="https://unsplash.com/@dsmacinnes">
									</div>
									<div class="latest_post_title"><a href="#">Cómo escanear con NMap</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">Autor</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comentarios</a></span>
									</div>
								</div>

							
							</div>

						</div>

						<!-- Tags -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Etiquetas</h3>
							</div>
							<div class="tags d-flex flex-row flex-wrap">
								<div class="tag"><a href="#">Redes</a></div>
								<div class="tag"><a href="#">Comunicaciones</a></div>
								<div class="tag"><a href="#">Router</a></div>
								<div class="tag"><a href="#">IP</a></div>
								<div class="tag"><a href="#">Curso</a></div>
								<div class="tag"><a href="#">NMap</a></div>
							</div>
						</div>

					</div>
				</div>
			</div> 
		</div>
	</div>