<link rel="stylesheet" type="text/css" href="styles/news_post_styles.css">

<div class="home">
	<div class="home_background_container prlx_parent">
		<div class="home_background prlx" style="background-image:url(images/foros.png)"></div>
	</div>
</div>

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
          <form action="<?php echo getUrl("Foro","Foro","insertNewPost") ?>" method="post" enctype="multipart/form-data">
                  <div class="jumbotron text-center" style="height:300px;">
                    <h2 class="display-5" style="margin-top:35px;">Inserte una imágen</h2>
                    <input type="file" id="file" name="imagen_foro">
                  </div>
                </div>
                <div class="news_post_top d-flex flex-column flex-sm-row">
                  <div class="news_post_title_container">
                    <div class="news_post_title ">
						<center><label>Título Foro</label></center>
                      <input class="form-control" type="text" name="titulo_foro" placeholder="Digite aquí el título del foro" style="width:600px;" required="required">
                    </div>
                    <div class="news_post_meta">
                      <span class="news_post_author"><a href="#">Por <?php echo $_SESSION['nombre']; ?> <?php echo $_SESSION['nombre2']; ?> <?php echo $_SESSION['apellidos']; ?></a></span>
                      <span>|</span>
                      <span class="news_post_comments"><a href="#">0 Comentarios</a></span>
                    </div>
                  </div>
                </div>
                <div class="news_post_text">
                  <textarea name="desc_foro" id="" cols="88" rows="10" required="required"></textarea>
                </div>
                
                <div class="row">
				  <label>Fecha fin</label>
                  <input type="date" name="fecha_final" class="form-control col-md-5" required="required">
				  <label>Tema </label>
                  <select class="form-control col-md-5 mx-1" name="tema_foro" required="required">
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

				

					

					</div>
				</div>
			</div>
		</div>
	</div>

 