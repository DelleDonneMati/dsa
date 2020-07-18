<?php
include("estilo.php");
include("nav.php");
include("conexion.php");

?>

<div class="alert alert-dark" role="alert">
  <p class="font-weight-bold" align="center">Hospedajes</p>
</div>



<?php


$res= mysqli_query($link, "SELECT * FROM hospedaje");
$hosp = mysqli_num_rows($res);

if($hosp == 0){

?>
<div align="center">
<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
    <p class="card-text">No hay hospedajes publicados.</p>
  </div>
</div>
</div>

<?php }

else{



$result = mysqli_query($link, "SELECT * FROM hospedaje");
while($hospedaje = mysqli_fetch_array($result)){ 

?>

<div align="center">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $hospedaje['link'];?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $hospedaje['nombre']; ?></h5>
        <p class="card-text"><a href="detalle-hospedaje.php?var=<?php echo $hospedaje['id']?>" class="badge badge-info" method="POST">Ver detalles</a>
        <a href="eliminar-hospedaje.php?var=<?php echo $hospedaje['id']?>" onclick="return valida()" class="badge badge-danger">Eliminar</a>  
        </p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- <form action="detalle-hospedaje.php" method="POST">
    

  <button type="submit" name="submit">Ver Detalle</button>
</form>
 -->

<?php } }?>


<script type="text/javascript">
  function valida(){
    if(confirm("¿Estas seguro que quieres eliminar el hospedaje?")){
    }
    else{
      event.preventDefault();
    }
  }
</script>