<link rel="stylesheet" href="styles/oferta/Ofertas.css">
<link rel="stylesheet" href="styles/oferta/postOferta.css">


<div class="jumbotron mt-4">
    <center>
        <h1>Oferta académica</h1>
    </center>
</div>

<?php
$contador=1;
foreach ($ofertas as $ofer) {
    if($contador==1){
      echo " <div class='row mt-4'>";
    }
?>
    <div class='container col-md-4'>
        <div class='card-deck'>
            <div class='card'>
                <img src="<?php echo $ofer['imag_oferta']; ?>" alt="">
                <p><?php echo $ofer['desc_oferta']; ?></p>
                <a href="<?php echo getUrl("Oferta", "Oferta", "getPostOferta"); ?>">Detalles</a>
            </div>
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






<!-- <?php
        /* $contador = 1;
foreach ($ofertas as $ofer) {
    if ($contador == 1) {
        echo "<div class='container'>";
        echo "<div class='card-deck row mt-4'>";
    } */
        ?>
    <div class='card'>
      
            <img src="<? php // echo $ofer['imag_oferta']; 
                        ?>" alt="">
            <p><?php //echo $ofer['desc_oferta']; 
                ?></p>
            <a href="<? php // echo getUrl("Oferta", "Oferta", "getPostOferta"); 
                        ?>">Detalles</a>
    </div>
<?php
/*   $contador++;
    if ($contador == 4) {
        echo "</div>";
        echo "</div>";
        $contador = 1;
    }
} */
?> -->