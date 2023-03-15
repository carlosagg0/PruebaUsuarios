<?php
require_once("../config/cn.php");

		$nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password = $_POST["password"];

$sql= "INSERT INTO `usuarios`(`nombre`, `apellido`, `email`, `password`) VALUES('$nombre','$apellido','$email','$password')";

$resultado  = mysqli_query($conexion,$sql);

if(resutado){
	
	echo "<script>
	
	alert('Registro insertado');
	window.location='../views/registro.php';
	</script>";
}else {
	echo
	"<script>
	alert('existe alguna falla, favor de intentar nuevamente');
	window.location = '../views/registro.php';
	</script>";
}
?>
	
