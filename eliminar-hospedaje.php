<?php
include("estilo.php");
include("conexion.php");



$id = $_GET['var'];

$cant_hosp = mysqli_query($link, "SELECT * FROM hospedaje WHERE id = '$id'");
$cant_sub = mysqli_query($link, "SELECT * FROM subasta WHERE hospedaje = '$id' and estado = '1'");

$cant_hosp = mysqli_num_rows($cant_hosp);
$cant_sub = mysqli_num_rows($cant_sub);


if($cant_sub >= 1 && $cant_hosp >= 1){

mysqli_query($link, "DELETE FROM hospedaje WHERE id = '$id'");
mysqli_query($link, "DELETE FROM subasta WHERE hospedaje = '$id'");


?>
<meta http-equiv="Refresh" content="10;url=listado-hospedaje.php">
    <br><br><br><br><br><br><br><br><br><br><br>
    <div align="center">El hospedaje tenia subastas activas. Eliminando hospedajes y subastas.</div><br>

    <div align="center">
    <div class="spinner-grow text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-secondary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-success" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-danger" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-warning" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-info" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-light" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-dark" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

<?php

}
else{

mysqli_query($link, "DELETE FROM hospedaje WHERE id = '$id'");

?>

<meta http-equiv="Refresh" content="10;url=listado-hospedaje.php">
    <br><br><br><br><br><br><br><br><br><br><br>
    <div align="center">Eliminando hospedaje</div><br>

    <div align="center">
    <div class="spinner-grow text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-secondary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-success" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-danger" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-warning" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-info" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-light" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-dark" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

<?php } ?>