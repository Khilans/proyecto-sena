<link rel="stylesheet" href="styles/oferta/Ofertas.css">
<div class="home">
  <img src="images/lam.jpg" class="img-fluid" alt="...">

  <div class="col mt-2">
    <p class="h1 text-info">Ofertas</p>
    <div class="p-1 mb-2 bg-warning"></div>
  </div>
</div>
<?php
    $contador=1;
    foreach ($ofertas as $ofer) {

        if($contador==1){
            echo "<div class='row'>";
        }
        
?>
    <div  style="margin-top:25px;" class="container col-2">
        <div class="card ml-md-4">
            <img src="<?php echo $ofer['imag_oferta']; ?>" alt="">
            <p><?php echo $ofer['desc_oferta']; ?></p>
            <p ><b>Cupos disponible:</b><?php echo $ofer['cupos_oferta']?></p>
            <p  style="margin-top:-35px;"><b>Fecha de cierre:</b><?php echo $ofer['fech_fin_oferta']?></p>
            <a href="<?php echo getUrl("Oferta", "Oferta", "getPostOferta", array("id_oferta" => $ofer['id_oferta']))  ?>" >Detalles</a>
        </div>
    </div>

<?php

    $contador++;
    if($contador==4){
        echo "</div>";
        $contador=1;
    }
}
?>

