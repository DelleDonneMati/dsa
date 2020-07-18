<?php
include("estilo.php");
include("nav.php");
include("conexion.php");
?>
<div class="alert alert-dark" role="alert">
  <p class="font-weight-bold" align="center">Detalle del hospedaje</p>
</div>
<?php
// mysqli_query ($link,"SET NAMES 'utf8'");
$sql="NONE";
$id = mysqli_real_escape_string($link, $_GET['var']);
$sql = "SELECT * FROM hospedaje WHERE id = '$id'";

$result = mysqli_query($link, $sql) or die("MAL SQL: $sql");

if (mysqli_num_rows($result)>0) {
	$flag=true;
}
// $stmt = $link->prepare("SELECT * FROM hospedaje where id = '$id'");
// if ($stmt->execute()) {
// 	while ($row = $stmt->fetch()) {
// 		print_r("hola");
// 	}
// }

// $id = $_GET['var']; //llega el id del hospedaje por paramtro get

// $id = addslashes($_GET['var']);
// print($id);



// $result = mysqli_query($link, "SELECT * FROM hospedaje WHERE id = '$id'");
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
