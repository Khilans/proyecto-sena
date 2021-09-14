<?php 
include_once "../model/MasterModel.php";

$obj = new MasterModel();

$sql = "SELECT * FROM t_configuracion";
$configuracion = $obj->consult($sql);

$sql = "SELECT * FROM t_noticia";
$noticias = $obj->consult($sql);


?>
	<!-- Footer -->

<br>
	<footer class="footer">
		<div class="container">
			


			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">
<!-- Footer Column - About -->
<?php
				foreach ($configuracion  as $confi) {	
					?>	
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>VISION</span>
							</div>
						</div>
						
						
							<p style="container-fluid" ><?php  echo $confi['desc_config']?></p>
						
						
						

					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Sofia plus</a></li>
								<li class="footer_list_item"><a href="#">Territorium</a></li>
								<li class="footer_list_item"><a href="#">SENA</a></li>
								
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									<?php echo $confi['dir_config']?>
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									<?php echo $confi['tel_config']?>
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									<?php  echo $confi['correo_config']?>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can"t be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can"t be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
		<?php
				}
		?>
	</footer>
