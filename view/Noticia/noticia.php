<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web/styles/prueba/bootstrap.css">
    <link rel="stylesheet" href="../web/styles/prueba/style.css">
    <link rel="stylesheet" href="../web/styles/prueba/main.css">
    <title>Document</title>
</head>
<?php 
include_once "../model/MasterModel.php";

?>
<?php
  foreach ($noticias as $noti) {
    
  
?>
<body>
    <div class="caja">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src=" <?php echo $noti['img_noticia'] ?> " alt="Card image cap">
      </div>
      <div class="card-body">
        <div class="meta">
          <time class="published" datetime="2015-11-01"><?php echo $noti['fecha_noticia']?></time>
          <a href="#" class="author"><span class="name">Nombre de usuario</span><img src="images/rana.jpeg" alt="" /></a>
        </div>
        <h5 class="card-title"><?php echo $noti['titulo_noticia']?></h5>
        <p class="card-text"><?php echo $noti['desc_noticia']?></p>
        <a href='"<?php echo getUrl("Noticia", "Noticia", "getDetalleNoticia", array("cod_noticia" => $noti['cod_noticia']))  ?>"' class="btn btn-primary">Ir a la noticia</a>
      </div>
    </div>

</body>
<?php
}
?>
</html>