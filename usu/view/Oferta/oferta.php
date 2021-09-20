<link rel="stylesheet" href="styles/oferta/Ofertas.css">

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
            <p style="margin-top:0px;"><?php echo $ofer['desc_oferta']; ?></p>
            <p ><b>Cupos disponible:</b><?php echo $ofer['cupos_oferta']?></p>
            <p ><b>Fecha de cierre:</b><?php echo $ofer['fech_fin_oferta']?></p>
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

