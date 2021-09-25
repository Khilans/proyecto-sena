<link rel="stylesheet" href="styles/oferta/Ofertas.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">


<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(images/Oferta.png)"></div>
    </div>
    <div class="home_content">
        <h1>OFERTAS</h1>
    </div>
</div>

<?php
$contador = 1;
foreach ($ofertas as $ofer) {

    if ($contador == 1) {
        echo "<div class='row'>";
    }

?>
    <div style="margin-top:25px;" class="container col-2">
        <div class="card ml-md-4">
            <img src="<?php echo $ofer['imag_oferta']; ?>" alt="">
            <p><?php echo $ofer['nom_oferta']; ?></p>
            <p><b>Cupos disponible:</b><?php echo $ofer['cupos_oferta'] ?></p>
            <p style="margin-top:-35px;"><b>Fecha de cierre:</b><?php echo $ofer['fech_fin_oferta'] ?></p>
            <a href="<?php echo getUrl("Oferta", "Oferta", "getPostOferta", array("id_oferta" => $ofer['id_oferta']))  ?>">Detalles</a>
        </div>
    </div>

<?php

    $contador++;
    if ($contador == 4) {
        echo "</div>";
        $contador = 1;
    }
}
?>
<br>
</div>