<?php
include("estilo.php");
include("nav.php");
include("conexion.php");
?>


<div class="alert alert-dark" role="alert">
  <p class="font-weight-bold" align="center">Nuevo hospedaje</p>


    <div class="container">
      <div class="ex1 links-place col-md-3">
        <h3 class="text-center"></h3>
      </div>
      <div class="col-md-6 col-md-offset-1">
        <h1 class="well text-center">Agregue el hospedaje que le guste</h1>
        <div class="jumbotron text-center">
            <form class="ex1" class="form-horizontal" action="">
                <label> Nombre del lugar
                    <input type="text" placeholder="Nombre" maxsize="155" class="form-control" required name="name"/>
                </label>
                <label>Imagen URL del lugar
                    <input class="form-control" placeholder="URL" type="url" required maxsize="15" name="url"/>
                </label>
                <div class="text-center">
                <input type="submit" class="btn btn-md btn-primary" value="Agregar Hospedaje"/>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>