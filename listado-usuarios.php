<?php
include("conexion.php");
include("estilo.php");
include("nav.php");

?>
<div class="alert alert-dark" role="alert">
  <p class="font-weight-bold" align="center">Solicitudes de usuario</p>
</div>

<div align="center">
<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
    <p class="card-text">No hay solicitudes de usuarios para ser Premium.</p>
  </div>
</div>
</div>


<?php

//Aca empieza el listado de toso los usuarios


$result = mysqli_query($link,"SELECT * FROM usuario WHERE tipo <> '2'");
?>

<div class="alert alert-dark" role="alert">
  <p class="font-weight-bold" align="center">Listado de usuarios</p>
</div>

<div class="mx-auto" style="width: 800px;" align="center">


<table class="table table-sm">
  <thead>
    <tr align="center">
      <th scope="col">Usuario</th> 
      <th scope="col">Detalle</th>
    </tr>
  </thead>
  <tbody>
    

	<?php
		while($usuario = mysqli_fetch_array($result)){
			?>
		

	<tr align="center">
      <td><?php echo $usuario['nombre'];?></td>
	  <td><a href="detalle-usuario.php?var=<?php echo $usuario['id'];?>"><button type="button" class="btn btn-warning btn-sm">Ver Datos</button></a></td>
	</tr>	

			<?php } ?>
  </tbody>
</table>



<script type="text/javascript">
	
	function seguridad(){
		if(confirm("¿Estas seguro que quieres ascender al usuario a Premium?")){
			//sigue a la direccion del boton en href
		}
		else{
			event.preventDefault(); // se mantiene en la pagina
		}
	}

	function baja(){
		if(confirm("¿Estas seguro que quieres descender al usuario a Basico?")){
			//sigue a la direccion del boton en href
		}
		else{
			event.preventDefault(); // se mantiene en la pagina
		}
	}
</script>