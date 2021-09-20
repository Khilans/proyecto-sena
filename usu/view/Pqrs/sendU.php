<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<!-- Home -->

<div class="home">
	<div class="home_background_container prlx_parent">
		<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
	</div>
	<div class="home_content">
		<h1>PQRSF</h1>
	</div>
</div>

<div class="container">
	<!-- Contact -->
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">

					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Radica tu PQRSF</div>

						<div class="contact_form_container">
							<form action="<?php echo getUrl("Pqrs","Pqrs","postSendU"); ?>" method="POST">

								<input class="input_field contact_form_name col-md-4" name="nombre" type="text" placeholder="Name" required="required" data-error="Name is required.">
								<input class="input_field contact_form_email col-md-4 mx-1" name="correo" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                                <select class="input_field col-md-3" name="tipopqrsf">
											<option value="">Seleccione</option>
											<?php
											foreach ($tipoPQRSF as $tpq) {
												echo "<option value='" . $tpq['cod_pqrsf_tipo'] . "'>" . $tpq['desc_pqrsf_tipo'] . "</option>";
											}
											?>
										</select>
								<textarea id="contact_form_message" class="text_field contact_form_message" name="pqrsf_desc" placeholder="Message" required="required" data-error="Por favor escribe el asunto."></textarea>
								<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Enviar">Radicar</button>
							</form>
						</div>
					</div>

				</div>

				<div class="col-lg-4">
					<div class="about">
						<div class="about_title">¿Qué son los PQRSF?</div>
						<p class="about_text">Las PQRSF son las solicitudes, quejas, reclamos, sugerencias y felicitaciones que los usuarios pueden enviar de manera verbal o escrita a través de los canales de contacto de PQRSF</p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Blvd Libertad, 34 m05200 Arévalo
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0034 37483 2445 322
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hello@company.com
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>

			<!-- Google Map -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<center>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.6684695040644!2d-76.49362068524188!3d3.430634397502953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a71a83f469d3%3A0xeb602ca40963938!2sSena%20Pondaje!5e0!3m2!1ses-419!2sco!4v1631251912479!5m2!1ses-419!2sco" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</center>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
