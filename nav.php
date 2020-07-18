<?php
session_start();
if(!isset($_SESSION["tipo"])){
  include("nav-deslog.php");
}else{
  if($_SESSION["tipo"]==1 || $_SESSION["tipo"]==3){
    include("nav-user.php");  
  }else{
    include("nav-admin.php");
  }
}  
?>
