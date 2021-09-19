<link rel="stylesheet" href="styles/oferta/Ofertas.css">



<!-- <div class="home">
	<div class="home_background_container prlx_parent">
		<div class="home_background prlx" style="background-image:url(images/ofer.jpg)"></div>
	</div>
	<div class="home_content">
		<h1>PQRSF</h1>
	</div>
</div> -->

<?php
    $contador=1;
    foreach ($ofertas as $ofer) {

        if($contador==1){
            echo "<div class='row'>";
        }
        
?>
    <div class="container col-2">
        <div class="card md-4">
            <img src="<?php echo $ofer['imag_oferta']; ?>" alt="">
            <p><?php echo $ofer['desc_oferta']; ?></p>
            <a href="<?php echo getUrl("Oferta", "Oferta", "getPostOferta", array("id_oferta" => $ofer['id_oferta']))  ?>" class="btn btn-primary">Detalles</a>
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

