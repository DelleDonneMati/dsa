<?php
?>

<nav class="navbar navbar-expand-lg static-top" style="background-color: #ffff;">
  <div class="container">
    <a class="navbar-brand" href="index.php">
          <img src="logo.png" alt="" width="75" height="60">&nbsp&nbsp&nbsp<img src="texto-logo.png" alt="" width="50%" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hospedajes</button>&nbsp
          <div class="dropdown-menu">
            <a class="dropdown-item" href="listado-hospedaje.php">Ver todos</a>
          </div>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Subastas</button>&nbsp
          <div class="dropdown-menu">
            <a class="dropdown-item" href="listado-subastas.php">Ver todas</a>
          </div>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</button>&nbsp
         <div class="dropdown-menu">
            <a class="dropdown-item" href="listado-usuarios.php">Ver todos</a>
          </div>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['usuario']; ?></button>&nbsp
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Cambiar contraseña</a>
            <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
          </div>
        </div>

      </ul>
    </div>
  </div>
</nav>

