<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./src/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="./src/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <title>Clase 5 ~ crud</title>
</head>
<body>
    <?php
    $fecha = "5 de junio 2024";
    $n_tema = 4;
    $tema = " || Sqlite | CRUD";
    include './src/includes/header.php';
    //require dirname(__FILE__) . './src/global/conexion.php';

    ?>
    <!--  -->
    <main>
        <section>
            <article>
<h1>sqlite3</h1>
<?php
            //include './src/includes/crud.php';
            ?>
            </article>
            <article>
  
  <!-- // imprimir el objeto -->
  <?php include("./src/global/conexion.php");
  ?>
  <h1> Crud con sqlite </h1>
  <h2>Insertar usuarios</h2>

  <div class="container">
    <div class="row">

    </div>
        <div class="col-sm-4">
 <form action="./src/global/insert.php" method="post">

  <div class="mb-3 mt-3">
    <label for="usuario" class="form-label">Usuario:</label>
    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Enter user" name="email">
  </div>
  <div class="mb-3 mt-3">
    <label for="correo" class="form-label">correo:</label>
    <input type="text" class="form-control" id="correo" name="correo" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="clave" class="form-label">Contraseña:</label>
    <input type="password" class="form-control" id="clave" name="clave" placeholder="Enter password" name="pswd">
  </div>
<div>
  <button type="submit" class="btn btn-primary">Insertar</button>
  </div>
</form> 
        </div>
            <div class="col-sm-8">
              <br>
              <h4>Tabla usuarios</h4>
            <table class="table">
    <thead class="table-dark">
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Correo</th>
        <th>Acciones</th>
      </tr>
    
    </tbody>
  </table>
            </div>
</div> 

            </article>
        </section>
    </main>

    <!--  -->
    <?php
    $alumno = "Guillermo Álvarez";
    $cedula = 30165318;
    $universidad = "Nueva Esparta";
    $logo = "logo.png";
    $logo1 = "UNEPrud.png";
    include './src/includes/footer.php';
    ?>

</body>
<?php
?>
</html>