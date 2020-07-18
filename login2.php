<?php	
include('conexion.php');
include('estilo.php');
	
	session_start();
	
		// $error = 'NOP';
		$user = $_POST['usuario'];
		$password = $_POST['password'];
		

		
$result = mysqli_query($link, "SELECT count(*),tipo,nombre,id FROM usuario WHERE mail = '$user' and contrasenia= '$password'") or die(mysqli_error());
while($lista1 = mysqli_fetch_array($result)){ 
?>

<?php if($lista1['count(*)'] == 0){

	?>
	</br>
</br>
</br>
</br>
</br>
</br>
<div align="center">
	<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Mensaje al usuario</div>
  <div class="card-body">
    <h5 class="card-title">Error</h5>
    <p class="card-text">Los datos ingresados son incorrectos.</p>
  </div>
</div>
<a href="javascript:window.history.go(-1);"><button class="btn btn-secondary">Volver</button></a>
	<?php
}
else{
	$_SESSION['tipo']=$lista1['tipo'];
	if($lista1['tipo'] == '2'){	//Usuario administrador
		$_SESSION['usuario']=$lista1['nombre'];
		$_SESSION['id']=$lista1['id'];

		?>
		<meta http-equiv="Refresh" content="4;url=index.php">
    <br><br><br><br><br><br><br><br><br><br><br>
    <div align="center">Bienvenido <?php echo $lista1['nombre'] ?></div><br>

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
		elseif ($lista1['tipo'] == '1') { //usuario basico
			$_SESSION['usuario']=$lista1['nombre'];
			$_SESSION['id']=$lista1['id'];
			//header("location: portal-user-basic.php");

?>
	<meta http-equiv="Refresh" content="4;url=index.php">
    <br><br><br><br><br><br><br><br><br><br><br>
    <div align="center">Bienvenido <?php echo $lista1['nombre']; ?></div><br>

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
		
				elseif ($lista1['tipo'] == '3') { //usuario basico
			$_SESSION['usuario']=$lista1['nombre'];
			$_SESSION['id']=$lista1['id'];
			//header("location: portal-user-basic.php");

?>
	<meta http-equiv="Refresh" content="4;url=index.php">
    <br><br><br><br><br><br><br><br><br><br><br>
    <div align="center">Bienvenido <?php echo $lista1['nombre']; ?></div><br>

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


	}
}

mysqli_close($link);



?>
