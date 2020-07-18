<?php
include("estilo.php");
include("nav.php");
include("conexion.php");

$user = $_GET['var'];

$usuario = mysqli_query($link,"SELECT * FROM usuario WHERE id = '$user'");
$notificacion = mysqli_query($link,"SELECT * FROM notificacion WHERE id_usuario = '$user' and mensaje = 'Solicitud entregada. Lo esperamos en nuestras oficinas de 10 a 20hs de Lunes a Viernes.'");
$cantidad_notificacion = mysqli_num_rows($notificacion);
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
  <p class="font-weight-bold" align="center">Datos del usuario</p>
</div>

</br>


<div class="mx-auto" style="width: 1000px;">
  <img src="perfil.jpg" width="28%">
  
  <p class="rounded float-right" style="width: 700px;">
  	<b>Nombre y apellido:</b> <?php echo $usuario['nombre'];?> <?php echo $usuario['apellido'];?>
  	</br>
  	<b>Fecha de nacimiento:</b> <?php echo $fecha_nacimiento;?>
  	</br>
  	<b>Email:</b> <?php echo $usuario['mail'];?>
  	</br>
  	<b>Tipo de usuario:</b> <?php if($usuario['tipo'] == 1) echo "Básico"; if($usuario['tipo'] == 3) echo "Premium"; ?>
  	</br>
  	<b>Creditos disponibles:</b> <?php echo $usuario['creditos'];?>
  </p>


</div>

</br>
</br>
</br>
</br>


</br>
<div class="card text-center badge-dark">
  
  <div class="card-body">
    <h5 class="card-title">Home SWITCHhome</h5>
    <p class="card-text">Copyright 2019 Home SWITCHhome | Todos los derechos reservados.</p>
  </div>
</div>