<?php
include("estilo.php");
include("nav.php");
include("conexion.php");

$user = $_SESSION['id'];

$usuario = mysqli_query($link,"SELECT * FROM usuario WHERE id = '$user'");
$usuario = mysqli_fetch_array($usuario);

?>


<?php
//CALCULO EL STRING PARA CADA MES PARA FECHA DE NACIMIENTO
$fecha = $usuario['fecha']; 
list($anio, $mes, $dia) = explode("-",$fecha); 
if($mes == '01')
	$mes = "Enero";
if($mes == '02')
	$mes = "Febrero";
if($mes == '03')
	$mes = "Marzo";
if($mes == '04')
	$mes = "Abril";
if($mes == '05')
	$mes = "Mayo";
if($mes == '06')
	$mes = "Junio";
if($mes == '07')
	$mes = "Julio";
if($mes == '08')
	$mes = "Agosto";
if($mes == '09')
	$mes = "Septiembre";
if($mes == '10')
	$mes = "Octubre";
if($mes == '11')
	$mes = "Noviembre";
if($mes == '12')
	$mes = "Diciembre";
$fecha_nacimiento = $dia." de ".$mes." de ".$anio;

//CALCULO EL STRING PARA CADA MES PARA FECHA DE VENCIMIENTO DE LA TARJETA
$fecha = $usuario['vencimiento']; 
$mes = substr($fecha,0,2);
$anio = substr($fecha,2); 
if($mes == '01')
	$mes = "Enero";
if($mes == '02')
	$mes = "Febrero";
if($mes == '03')
	$mes = "Marzo";
if($mes == '04')
	$mes = "Abril";
if($mes == '05')
	$mes = "Mayo";
if($mes == '06')
	$mes = "Junio";
if($mes == '07')
	$mes = "Julio";
if($mes == '08')
	$mes = "Agosto";
if($mes == '09')
	$mes = "Septiembre";
if($mes == '10')
	$mes = "Octubre";
if($mes == '11')
	$mes = "Noviembre";
if($mes == '12')
	$mes = "Diciembre";
if($anio == '19')
	$anio = "2019";
if($anio == '20')
	$anio = "2020";
if($anio == '21')
	$anio = "2021";
if($anio == '22')
	$anio = "2022";
if($anio == '23')
	$anio = "2023";
$fecha_vencimiento = $mes." del ".$anio;

?>


<div class="alert alert-dark" role="alert">
  <p class="font-weight-bold" align="center">Mi perfil</p>
</div>


<div class="mx-auto" style="width: 1000px;">
  <img src="perfil.jpg" width="28%">
  
  <p class="rounded float-right" style="width: 700px;">
  	<b>Nombre y apellido:</b> <?php echo $usuario['nombre'];?> <?php echo $usuario['apellido'];?>
  	</br>
  	<b>Fecha de nacimiento:</b> <?php echo $fecha_nacimiento;?>
  	</br>
  	<b>Email:</b> <?php echo $usuario['mail'];?>
  	</br>
  	<b>Tipo de usuario:</b> <?php if($usuario['tipo'] == 1) echo "Básico"; elseif ($usuario['tipo'] == 3) echo "Premium";?>
  	</br>
  	<b>Creditos disponibles:</b> <?php echo $usuario['creditos'];?>
  	</br>
	</br>
  </p>


</div>

</br>
</br>
<div class="mx-auto" style="width: 1000px;">
  <img src="card.jpg" width="28%">


	<p class="rounded float-right" style="width: 700px;">
  		</br>
  		<b>Titular:</b> <?php echo $usuario['titular'];?>
  		</br>
  		<b>Número:</b> ************<?php echo substr($usuario['numero_tar'],12,16);?>
  		</br>
  		<b>Código:</b> ***
  		</br>
  		<b>Vencimiento:</b> <?php echo $fecha_vencimiento;?>
  		</br>
  		<b>Limite:</b> $<?php echo $usuario['limite'];?>
  		</br>
  		</br>
  	</p>

</div>

</br>
<div class="card text-center badge-dark">
  
  <div class="card-body">
    <h5 class="card-title">Home SWITCHhome</h5>
    <p class="card-text">Copyright 2019 Home SWITCHhome | Todos los derechos reservados.</p>
  </div>
</div>