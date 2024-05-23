<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./clase1_POO_GA/src/css/style.css">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <title>clases de programacion 4</title>
</head>
<body>
    <header>
    <?php
    $fecha = "1 Mayo 2024";
    $n_tema = 0;
    $tema = " Programacion 4 ";
    include './clase1_POO_GA/src/includes/header.php';
    ?>
    </header>
<main>
<section>
    <article>
        <?php 
      /*  // Ruta del directorio actual donde se encuentra el archivo index.php
$directorio =__DIR__
var_dump($directorio);
*/
// Escanea el directorio en busca de carpetas
$carpetas = array_diff(scandir($directorio), array('..', '.'));
var_dump($carpetas);
// Itera sobre las carpetas encontradas
foreach ($carpetas as $carpeta) {
    // Genera la etiqueta <a> con el enlace a cada carpeta
    echo '<a href="'  . './' . $carpeta .'">' . $carpeta . '</a><br>';
}
        ?>
<a href="./clase1_POO_GA/">Clase 1</a>
<a href="./clase2_POO_GA/">Clase 2</a>
    </article>
</section>
</main>
    <footer>
    <?php
    $alumno = "Guillermo Álvarez";
    $cedula = 30165318;
    $universidad = "Nueva Esparta";
    $logo = "logo.png";
    $logo1 = "UNEPrud.png";
    include './clase1_POO_GA/src/includes/footer.php';
    ?>
    </footer>
</body>
</html>