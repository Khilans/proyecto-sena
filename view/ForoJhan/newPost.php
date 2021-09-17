<link rel="stylesheet" type="text/css" href="styles/news_post_styles.css">


<div class="super_container" style="margin-top:200px;">
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
          <form action="<?php echo getUrl("Foro","Foro","insertNewPost") ?>" method="post">
                  <div class="jumbotron text-center" style="height:300px;">
                    <h2 class="display-5" style="margin-top:35px;">Inserte una imágen</h2>
                    <input type="file"  name="imagen_foro" id="">
                  </div>
                </div>
                <div class="news_post_top d-flex flex-column flex-sm-row">
                  <div class="news_post_date_container">
                    <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                      <div>18</div>
                      <div>dec</div>
                    </div>
                  </div>
                  <div class="news_post_title_container">
                    <div class="news_post_title ">
                      <input class="form-control" type="text" name="titulo_foro" placeholder="Digite aquí el título del foro" style="width:600px;">
                    </div>
                    <div class="news_post_meta">
                      <span class="news_post_author"><a href="#">Por <?php echo $_SESSION['nombre']; ?> <?php echo $_SESSION['nombre2']; ?> <?php echo $_SESSION['apellidos']; ?></a></span>
                      <span>|</span>
                      <span class="news_post_comments"><a href="#">0 Comentarios</a></span>
                    </div>
                  </div>
                </div>
                <div class="news_post_text">
                  <textarea name="desc_foro" id="" cols="88" rows="10"></textarea>
                </div>
                
                <div class="row">
                  <input type="date" name="fecha_final" class="form-control col-md-6">
                  <select class="form-control col-md-5 mx-1" name="tema_foro">
                    <option value="">Seleccione...</option>
                    <?php foreach($temas as $tema){
                      echo "<option value='".$tema['cod_tema']."'>".$tema['desc_tema']."</option>";
                    }
                    ?>
                  </select>
                </div>

                <div class="row" style="margin-top:10px;">
                  <button type="submit" class="btn btn-success btn-block">Registrar foro</button>
                </div>
              </div>

            </div>
          </form>
				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Archives</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="#">Design Courses</a></li>
								<li class="sidebar_list_item"><a href="#">All you need to know</a></li>
								<li class="sidebar_list_item"><a href="#">Uncategorized</a></li>
								<li class="sidebar_list_item"><a href="#">About Our Departments</a></li>
								<li class="sidebar_list_item"><a href="#">Choose the right course</a></li>
							</ul>
						</div>

						<!-- Latest Posts -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Latest posts</h3>
							</div>

							<div class="latest_posts">
								
								<!-- Latest Post -->
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

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="images/latest_2.jpg" alt="https://unsplash.com/@erothermel">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="images/latest_3.jpg" alt="https://unsplash.com/@element5digital">
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

 