<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Clase 3 ~ Sqlite</title>
</head>
<body>
    <?php
    $fecha = "22 Mayo 2024";
    $n_tema = 3;
    $tema = " || Sqlite";
    include './src/includes/header.php';
    ?>
    <!--  -->

    <main>
        <section>
            <article>
            <h1> ¿Qué es SQLite?</h1>
                <p>
                SQLite es una herramienta de software libre que permite almacenar información en dispositivos embebidos de forma sencilla, eficaz, potente y rápida. Es una base de datos muy eficaz para desarrollos en ambientes embebidos, ofreciendo alto rendimiento, eficacia, seguridad, estandarización e interoperabilidad. SQLite implementa el estándar SQL92 y agrega extensiones que facilitan su uso en cualquier ambiente de desarrollo, soportando consultas básicas y complejas del lenguaje SQL. Se destaca por ser autocontenida, funcionar en memoria, tener un tamaño pequeño y ser altamente portátil entre dispositivos y plataformas. SQLite es ampliamente utilizado en dispositivos móviles y sistemas embebidos, siendo una base de datos de facto en estos entornos.
                </p>
            </article>
        </section>
        <section>
            
            <article>
  
            <h2>Características de SQLite</h2> <ul> <li>Autocontenida: SQLite no requiere un servidor separado, lo que la hace ideal para aplicaciones embebidas y de escritorio.</li> <li>Serverless: SQLite no necesita un proceso de servidor separado, lo que la hace más simple y fácil de configurar.</li> <li>Transaccional: SQLite soporta transacciones ACID completas, lo que garantiza la integridad de los datos.</li> <li>Dinámicamente tipada: SQLite usa tipos de datos dinámicos, lo que significa que puede almacenar cualquier tipo de dato en cualquier columna.</li> <li>Multiplataforma: SQLite funciona en la mayoría de los sistemas operativos, incluyendo Windows, macOS, iOS, Android, Linux, etc.</li> <li>Código abierto: SQLite tiene un código abierto y está disponible para su uso gratuito para cualquier propósito, incluyendo aplicaciones comerciales.</li> <li>Pequeño tamaño: El motor de base de datos SQLite en sí mismo es muy pequeño, compacto y eficiente, con un tamaño de solo unos pocos cientos de kilobytes.</li> <li>Rápido: SQLite es muy rápido para la mayoría de las operaciones de base de datos, especialmente para aplicaciones de lectura intensiva.</li> <li>Seguro: SQLite tiene un buen historial de seguridad y no es conocido por tener vulnerabilidades de seguridad.</li> <li>Estable: SQLite es un proyecto maduro y estable que ha estado en desarrollo activo durante más de 15 años.</li> </ul>
               
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