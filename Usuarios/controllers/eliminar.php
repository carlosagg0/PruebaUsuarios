<?php
include ("../config/cn.php");

$id = $_GET['id'];
$sql= "DELETE FROM usuarios WHERE id='$id'";
$resultadoEliminar=mysqli_query($conexion,$sql);

if($resultadoEliminar){
	
	header("Location:../views/mostrartabla.php");
}
	
?>