<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">


<div class="home">
  <img src="images/teachers_background.jpg" class="img-fluid" alt="...">

  <div class="col mt-2">
    <p class="h1 text-info">Noticias</p>
    <div class="p-1 mb-2 bg-warning"></div>
    <div class="row mt-4">
    <div class="col-md-3">
        <input type="text" placeholder="Buscar.." name="filtro" id="filtro" class="form-control" data-url="<?php echo getUrl("Noticia", "Noticia", "filtroNoti", false, "ajax") ?>">
    </div>
</div>
  </div>
</div>
<div id="BuscarNoti">
  <?php
  foreach ($noticias as $noti) {
  ?>
    <div style="margin: 2em; padding-bottom: 5px" class="col-md-10">
      <div class="caja">
        <div style="width: 17rem;">
          <img src="<?php echo $noti['img_noticia'] ?>" class="img-thumbnail" alt="Error al cargar la imagen">
        </div>
        <div class="card-body">
          <div class="meta col">
            <time class="published" datetime="2015-11-01"><?php echo $noti['fecha_noticia'] ?></time>
            <h5 class=" card-title"><?php echo $noti['titulo_noticia'] ?></h5>
            <p class=" card-text"><?php echo $noti['desc_noticia'] ?></p>
            <a href="<?php echo getUrl("Noticia", "Noticia", "getDetalleNoticia", array("cod_noticia" => $noti['cod_noticia']))  ?>">Seguir leyendo...</a>
          </div>
        </div>
      </div>
    </div>

  <?php
  }
  ?>
</div>