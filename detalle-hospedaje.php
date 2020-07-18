<?php
include("estilo.php");
include("nav.php");
include("conexion.php");
?>
<div class="alert alert-dark" role="alert">
  <p class="font-weight-bold" align="center">Detalle del hospedaje</p>
</div>
<?php
mysqli_query ($link,"SET NAMES 'utf8'");
$id = $_GET['var']; //llega el id del hospedaje por paramtro get
?>

<?php
$result = mysqli_query($link, "SELECT * FROM hospedaje WHERE id = $id ");
while($hospedaje = mysqli_fetch_array($result)){ 

?>
<div align="center">
<div class="">
  
  <img src="<?php echo $hospedaje['link'];?>" width = "50%" heigth = "50%">
  <div class="card-body">
    
    <h5 class="card-title"><?php echo $hospedaje['nombre'];?></h5>
    <p class="card-text"><?php echo $hospedaje['descripcion'];?></p>
    <p class="card-text"><small class="text-muted"><?php echo $hospedaje['direccion'];?>-<?php echo $hospedaje['ciudad'];?>-<?php echo $hospedaje['provincia'];?>-<?php echo $hospedaje['pais'];?></small></p>
  </div>
</div>
</div>

<?php
}
?>
