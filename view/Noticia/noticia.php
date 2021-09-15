<?php 
  foreach ($noticias as $noti) {   
?> 
  <div class="caja">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo $noti['img_noticia'] ?>" alt="Error al cargar la imagen">
    </div>
    <div class="card-body">
      <div class="meta">
        <time class="published" datetime="2015-11-01"><?php echo $noti['fecha_noticia']?></time>
        <!-- <a href="#" class="author"><span class="name">Nombre de usuario</span><img src="images/rana.jpeg" alt="" /></a> -->
      </div>
      <h5 class="card-title"><?php echo $noti['titulo_noticia']?></h5>
      <p class="card-text"><?php echo $noti['desc_noticia']?></p> 
      <a href="<?php echo getUrl("Noticia", "Noticia", "getDetalleNoticia", array("cod_noticia" => $noti['cod_noticia']))  ?>" class="btn btn-primary">Seguir leyendo...</a>
    </div>
  </div> 
<?php
  }
?>
