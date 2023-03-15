<!DOCTYPE html>
<?php
include("../config/cn.php");

$usuarios = "SELECT * FROM usuarios";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/Estilos.css">
</head>

<body>
        <div id="content">
        <header>
            <h1>Usuarios Registrados</h1>
           </header>
           <section id="principal">
            
           <br>
        <table class="table table-bordered">
        <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Fecha de ingreso</th>
              </tr>
        <?php $resultado = mysqli_query($conexion,$usuarios);
        while($row=mysqli_fetch_assoc($resultado)){?>
        <tr>
          <th class="table__item"><?php echo
          $row["id"];?></th>
          <th class="table__item"><?php echo
          $row["nombre"];?></th>
          <th class="table__item"><?php echo
          $row["apellido"];?></th>
          <th class="table__item"><?php echo
          $row["email"];?></th>
          <th class="table__item"><?php echo
          $row["password"];?></th>
          <th class="table__item"><?php echo
          $row["fechaIngreso"];?></th>
          <th><a href="../controllers/eliminar.php?id=<?php echo $row["id"];?>" class="table__item__link">Eliminar</a>
          </tr>
          <?php
        }mysqli_free_result($resultado);?>

        </table>


        <center><a href="../views/registro.php" >Regresar</a></center>
                  </section>

                  <footer>
                    <p> 2023</p>
                  </footer>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="script.js"></script>


	


</body>

</html>
