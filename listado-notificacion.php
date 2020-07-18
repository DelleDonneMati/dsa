<?php

include("conexion.php");
include("estilo.php");
include("nav.php");


$user = $_SESSION['id'];

$resultado = mysqli_query($link,"SELECT * FROM notificacion WHERE id_usuario = '$user' ORDER BY id DESC");

while($res = mysqli_fetch_array($resultado)){


?>

</br>

<div align="center">
<div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-body text-primary">
    <h5 class="card-title">Notificacion al usuario</h5>
    <p class="card-text"><?php echo $res['mensaje'];?></p>
  </div>
</div>
</div>
<?php } ?>