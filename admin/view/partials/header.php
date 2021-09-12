 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">SenaTel</a>
  
<div class="d-flex flex-row justify-content-center align-items-center">
      <?php if(isset($_SESSION['user_id'])){
        ?>
          <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['nombre']; ?>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item text-center" type="button" id="modalUpdate" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("Usuarios","Usuarios","profile",false,"ajax"); ?>" data-usu_id="<?php echo $_SESSION['user_id']; ?>">Perfil</button>
              <a href="<?php echo getUrl("Acceso","Acceso","logout"); ?>"><button class="dropdown-item text-center" type="button">Cerrar sesión</button></a>
              <a href="<?php echo getUrl("Usuarios","Usuarios","mail",false,"ajax"); ?>"><button class="dropdown-item text-center">Correo</button></a>
            </div>
          </div>
        <?php
      }else{
        ?>
        <li class="main_nav_item"><a href="login.php">Inicio de Sesion</a></li>
      <?php
      }
      ?>
    </div>

    <!-- Hamburger -->
    <div class="hamburger_container">
      <i class="fas fa-bars trans_200"></i>
    </div>
</nav>

<nav id="botonera" class="col-md-2 d-none d-md-block bg-light sidebar ">
      <div class="sidebar-sticky">
        <ul class="nav navbar">
  

          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="home"></span>
              PAGINA PRINCIPAL <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getUrl("Usuarios", "Usuarios", "consult") ?>">
              <span data-feather="users"></span>
              USUARIOS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getUrl("Noticia", "Noticia", "consult") ?>">
              <span data-feather="file"></span>
              NOTICIAS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getUrl("Programa", "Programa", "consult") ?>">
              <span data-feather="users"></span>
              PROGRAMAS
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo getUrl("Oferta", "Oferta", "consult") ?>">
              <span data-feather="file"></span>
              OFERTAS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getUrl("Pqrs", "Pqrs", "consult") ?>">
              <span data-feather="file"></span>
             PQRSF
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getUrl("Foro", "Foro", "consult") ?>">
              <span data-feather="file"></span>
              FOROS
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo getUrl("Ttipodocumento", "Ttipodocumento", "consult") ?>">
              <span data-feather="file"></span>
              documentos
            </a>
          </li>
        </ul>

       
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Bienvenido <?php echo $_SESSION["nombre"]; ?></h1>
      </div>

