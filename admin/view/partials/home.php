<div id="inicio" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
			 
<div class="jumbotron">
  <h1 class="text-center">Bienvenidos</h1>
  <p class="text-center">Bienvenidos al panel de control. <?php echo $_SESSION['rol']; ?></p>
</div>
    <hr>
		<ul>
		<li class="botonesInicio">
				   <a href="<?php echo getUrl("Usuarios", "Usuarios", "consult") ?>">
		             <div style="background:#fc7323">
		              <span class="fa fa-users"></span>
		              <p>USUARIOS</p>
	                 </div>
		           </a>
        </li>

		<li class="botonesInicio">
					
					<a href="<?php echo getUrl("Noticia", "Noticia", "consult") ?>">
					   <div style="background:#238276">
						<span class="fa fa-users"></span>
					    <p>NOTICIAS</p>
					   </div>
					</a>

		</li>

					<li class="botonesInicio">
					
						<a href="<?php echo getUrl("Programa", "Programa", "consult") ?>">
						<div style="background:#5fb219">
						<span class="fa fa-users"></span>
						<p>PROGRAMAS</p>
						</div>
						</a>

					</li>

					<li class="botonesInicio">
					
						<a href="<?php echo getUrl("Oferta", "Oferta", "consult") ?>">
						<div style="background:#238276"> 
						<span class="fa fa-users"></span>
						<p>OFERTAS</p>
						</div>
						</a>

					</li>

					<li class="botonesInicio">
					
						<a href="<?php echo getUrl("Pqrs", "Pqrs", "consult") ?>">
						<div style="background:#fc7323">
						<span class="fa fa-users"></span>
						<p>PQRS</p>
						</div>
						</a>

					</li>
					<li class="botonesInicio">
					
						<a href="<?php echo getUrl("Foros", "Foros", "consult") ?>">
						<div style="background:#fc7323">
						<span class="fa fa-users"></span>
						<p>PQRS</p>
						</div>
						</a>

					</li>

				</ul>

    		</div>

    	
			<!--====  Fin de INICIO  ====-->