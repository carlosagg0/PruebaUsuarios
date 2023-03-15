<!DOCTYPE php>
<?php
include("../config/cn.php");

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Usuarios</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/37e04a1bdb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/Estilos.css">
    
    </head>
    <body>
        <div id="content">
        <header>
            <h1>Usuarios</h1>
           </header>
           <section id="principal">
            <form action="../controllers/insertar.php" method="post">
                <fieldset class="scheduler-border">
                <h3>Ingresa los datos</h3>
                 <label for="usr">Nombre:</label>
                 <input type="text" name="nombre" class="form-control" id="nombre">
               
               <div class="form-group">
                 <label for="pwd">Apellido:</label>
                 <input type="text" name="apellido"class="form-control" id="apellido">
               </div>

               <div class="form-group">
                 <label for="pwd">Email:</label>
                 <input type="text" name="email"class="form-control" id="email">
               </div>

               <div class="form-group">
                 <label for="pwd">Contraseña:</label>
                 <input type="password" name="password"class="form-control" id="password">
               </div>
               
               <center>
               <button type="submit" type="submit" class="btn btn-success">Guardar</button>
               <a href="mostrartabla.php" >Mostrar tabla</a>
            </center>

                </fieldset>
               </form>
           </section>

           <footer>
            <p> Carlos Guevara</p>
           </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="script.js"></script>
    </body>

</html>