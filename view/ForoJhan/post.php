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
										<a href="news_post.html">Why do you need a qualification?</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies venenatis. Suspendisse fermentum sodales lacus, lacinia gravida elit dapibus sed. Cras in lectus elit. Maecenas tempus nunc vitae mi egestas venenatis. Aliquam rhoncus, purus in vehicula porttitor, lacus ante consequat purus, id elementum enim purus nec enim. In sed odio rhoncus, tristique ipsum id, pharetra neque. </p>
							</div>

							<div class="news_post_quote">
								<p class="news_post_quote_text"><span>E</span>tiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies venena tis. Suspendisse fermentum sodales lacus, lacinia gravida elit.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies venenatis. Suspendisse fermentum sodales lacus, lacinia gravida elit dapibus sed. Cras in lectus elit. Maecenas tempus nunc vitae mi egestas venenatis. Aliquam rhoncus, purus in vehicula porttitor, lacus ante consequat purus, id elementum enim purus nec enim. In sed odio rhoncus, tristique ipsum id, pharetra neque. </p>
						</div>

					</div>
					
					<!-- Comments -->
					<div class="news_post_comments">
						<div class="comments_title">Comentarios</div>
						<ul class="comments_list">
							
							<!-- Comment -->
							<li class="comment">
								<div class="comment_container d-flex flex-row">
									<div>
										<div class="comment_image">
											<img src="images/comment_1.jpg" alt="">
										</div>
									</div>
									<div class="comment_content">
										<div class="comment_meta">
											<span class="comment_name"><a href="#">Jhan Sebastián</a></span>
											<span class="comment_separator">|</span>
											<span class="comment_date">Sept 11, 2021</span>
											<span class="comment_separator">|</span>
											<span class="comment_reply_link"><a href="#">Responder</a></span>
										</div>
										<p class="comment_text">Aliquam rhoncus, purus in vehicula porttitor, lacus ante consequat purus, id elementum enim purus nec enim. In sed odio rhoncus, tristique ipsum id, pharetra neque. </p>
									</div>
								</div>
							</li>

						</ul>

					</div>

					<!-- Leave Comment -->

					<div class="leave_comment">
						<div class="leave_comment_title">Deja un comentario</div>

						<div class="leave_comment_form_container">
							<form action="post">
                                <?php
                                if(isset($_SESSION['user_id'])){
                                    ?>
                                    <input id="comment_form_name" class="input_field contact_form_name" type="text" value="<?php echo $_SESSION['nombre'];?>" required="required" data-error="Name is required.">
                                    <input id="comment_form_email" class="input_field contact_form_email" type="email" value="<?php echo $_SESSION['correo'];?>" required="required" data-error="Valid email is required.">
                                   <?php
                                    }else{
                                    ?>
                                <?php
                                    }
                                ?>
                                <textarea id="comment_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
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