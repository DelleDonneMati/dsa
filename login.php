<?php
include("estilo.php");
include("nav.php");
?>
<br/>
<div align="center">
<img src="logo.png" height="20%" width="15%">
</div>



<form class="" method="POST" action="login2.php">

 <div align="center"> 
  <div class="form-group">
    <div class="col-sm-4">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="usuario" required>
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie.</small>
  </div>
</div>
  <div class="form-group">
    <div class="col-sm-4">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="password" required>
  </div>
  <div class="form-group form-check">
    <div class="col-sm-4">
      <br/>
  </div>
</div>
</div>

  <div align="center">
           <button class="btn btn-secondary" type="submit" onclick="return seguridad();" name="action">Enviar
      </button>
    </div>


</form>
