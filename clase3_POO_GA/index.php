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
        <section>
            <article>
                
<h2>Operaciones en SQLite</h2>

<h3>Creación de Tablas</h3>
<p>Muestra la sintaxis para crear una tabla llamada "tbl_articulos" con columnas específicas y restricciones.</p>
<pre>
CREATE TABLE "tbl_articulos" (
    "id_art" INTEGER NOT NULL,
    "descripcion_art" TEXT,
    "marca_med" TEXT,
    "id_med" INTEGER,
    "id_cat" INTEGER,
    PRIMARY KEY("id_art" AUTOINCREMENT)
);
</pre>

<h3>Inserción de Datos</h3>
<p>Ejemplifica cómo insertar datos en la tabla "tbl_medidas" y seleccionar todos los registros.</p>
<pre>
INSERT INTO tbl_medidas(descripcion_med) VALUES('litros')
SELECT * from tbl_medidas
</pre>

<h3>Actualización de Datos</h3>
<p>Muestra cómo actualizar el valor de la columna "descripcion_cat" en la tabla "tbl_categorias" donde el "id_cat" sea 4.</p>
<pre>
UPDATE tbl_categorias SET descripcion_cat = 'otros' WHERE id_cat = 4
</pre>

<h3>Eliminación de Datos</h3>
<p>Ejemplifica cómo eliminar un registro de la tabla "tbl_categorias" donde el "id_cat" sea 3, y luego seleccionar todos los registros.</p>
<pre>
DELETE FROM tbl_categorias WHERE id_cat = 3
SELECT * from tbl_categorias
</pre>
<h3>Funciones Strings</h3>

<img src="./src/img/funcionesString.png" alt="strings">
<h3> funciones mas usadas</h3>
<img src="./src/img/funcionesMasUsadas.png" alt="masUsadas">

<h3>Vistas</h3>
<p>Muestra cómo crear una vista llamada "vista1" que selecciona las columnas "descripcion_cat" y "id_cat" de la tabla "tbl_categorias", y luego selecciona todos los registros de la vista.</p>
<pre>
CREATE VIEW vista1 AS
SELECT descripcion_cat as catergoria, id_cat as id
FROM tbl_categorias
SELECT * FROM vista1
</pre>

<h3>Consultas Avanzadas</h3>
<p>Ejemplifica el uso de cláusulas como WHERE, IN, LIKE, AND, OR y ORDER BY para filtrar y ordenar resultados en la tabla "tbl_articulos".</p>
<pre>
SELECT * FROM tbl_articulos WHERE marca_med = 'HP'
SELECT * FROM tbl_articulos WHERE marca_med IN ('HP','LG')
SELECT * FROM tbl_articulos WHERE marca_med LIKE '%R%'
SELECT * FROM tbl_articulos WHERE id_art = 1 AND id_cat = 1
SELECT * FROM tbl_articulos WHERE id_art = 1 OR id_cat = 1
SELECT * FROM tbl_articulos ORDER BY id_art DESC
</pre>

<h3>Joins</h3>
<p>Muestra cómo combinar datos de múltiples tablas utilizando JOIN, LEFT JOIN y ON para especificar las condiciones de unión.</p>
<pre>
SELECT * FROM tbl_articulos AS art
JOIN tbl_medidas med ON med.id_med = art.id_med
JOIN tbl_categorias cat ON cat.id_cat = art.id_cat

SELECT * FROM tbl_articulos a
LEFT JOIN tbl_categorias b ON a.id_cat = b.id_cat
</pre>

<h3>Funciones Especiales</h3>
<p>Ejemplifica el uso de UNION para combinar resultados de múltiples consultas, GROUP BY para agrupar resultados, y IIF para evaluar condiciones.</p>
<pre>
SELECT * FROM tbl_categorias UNION SELECT * FROM tbl_medidas
SELECT marca_med, COUNT(descripcion_art) FROM tbl_articulos GROUP BY marca_med
SELECT IIF(3=33, 'numeros iguales','numeros diferentes')
</pre>

<h3>Triggers</h3>
<img src="./src/img/triggers.png" alt="triggers">
<p>Muestra cómo crear triggers que se ejecutan antes de insertar un nuevo registro (validar_articulo) y después de eliminar un registro (auditar_eliminacion_articulo) en la tabla "tbl_articulos".</p>
<pre>
CREATE TRIGGER validar_articulo
BEFORE INSERT ON "tbl_articulos"
BEGIN
    -- Código del trigger
END;

CREATE TRIGGER auditar_eliminacion_articulo
AFTER DELETE ON "tbl_articulos"
BEGIN
    -- Código del trigger
END;
</pre>
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