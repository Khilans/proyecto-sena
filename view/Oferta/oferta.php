<link rel="stylesheet" href="styles/oferta/Ofertas.css">   
<link rel="stylesheet" href="styles/oferta/postOferta.css"> 
<br><br><br><br><br>


<div class="jumbotron mt-4">
   <center><h1>Oferta académica</h1></center> 
</div>
<div class="container">
    <div class="card-deck col-md-4">
        <div class="card mb-3">
            <img class="card-img-top" src="images/course_2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="card-deck col-md-4">
        <div class="card mb-3">
            <img class="card-img-top" src="images/telecomunicaciones-3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="card-deck col-md-4">
        <div class="card mb-3">
            <img class="card-img-top" src="images/login.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    
</div>


<div class="container mt-4">
    <div class="card-deck col-md-4">
        <div class="card mb-3">
            <img class="card-img-top" src="img/foto-cdti-2019.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="card-deck col-md-4">
        <div class="card mb-3">
            <img class="card-img-top" src="images/telecomunicaciones-1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="card-deck col-md-4">
        <div class="card mb-3">
            <img class="card-img-top" src="images/event_3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    
</div>




<?php
include_once '../model/masterModel.php';
$obj = new MasterModel();

$sql = "SELECT * FROM oferta";
$ofertas = $obj->consult($sql);
?>
<?php
$contador = 1;
foreach ($oferta as $ofer) {
   if ($contador == 1) {
      echo "<div class='container'>";
      echo "<div class='card-deck row mt-4'>";
   }
   echo "<div class='card col-md-4'>";
   echo "<div class='ml-5  mt-4'>";
   echo "<div class='card-deck row mt-4'>";
   echo "<img class='card-img-top mt-3' src='" . $ofer['imag_oferta'] . "' alt='Card image cap'>";
   echo "<ul class='social'>";
   echo "</ul>";
   echo "<div class='card-body'>";
   echo "<h5 class='card-title'>" . $ofer['desc_oferta'] . "</h5>";
   echo "<p class='card-text'>" . $ofer['imag_oferta'] . "</p>";
   echo "<div  onclick='addCart(" . $ofer['...'] . ")' class='btn btn-primary'>ver más</div>";

   echo "</div>";
   echo "</div>";
   echo "</div>";
   echo "</div>";
   $contador++;
   if ($contador == 5) {
      echo "</div>";
      echo "</div>";
      $contador = 1;
   }
}
?>