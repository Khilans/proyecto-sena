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