<?php
echo ('
<article>
    <h2>SQLITE </h2>
    <p>Es un sistema de gestión de bases de datos relacional compatible con ACID contenida en una relativamente pequeña (~275 kiB) biblioteca escrita en C SQLite es un proyecto de dominio público creado por <strong> D. Richard Hipp.</strong></p>
    <p>A diferencia de los sistema de gestión de bases de datos cliente-servidor, el motor de SQLite no es un proceso independiente con el que el programa principal se comunica. En lugar de eso, la biblioteca SQLite se enlaza con el programa pasando a ser parte integral del mismo. El programa utiliza la  funcionalidad de SQLite a través de llamadas simples a subrutinas y funciones. Esto reduce la latencia en el acceso a la base de datos, debido a que las llamadas a funciones son más eficientes que la comunicación entre procesos. El conjunto de la base de datos (definiciones, tablas, índices, y los propios datos), son guardados como un solo fichero estándar en la máquina host. Este diseño simple se logra bloqueando todo el fichero de base de datos al principio de cada transacción.</p>
    <p>
        En su versión 3, SQLite permite bases de datos de hasta 2 Terabytes de tamaño, y también permite la
        inclusión de campos tipo BLOB.

        El autor de SQLite ofrece formación, contratos de soporte técnico y características adicionales como
        compresión y cifrado.</p>
    <h3> Comando - Descripción</h3>
    <ol>

        <li> <b>.show -></b> Muestra los valores actuales de varios parámetros</li>
        <li> <b>.databases -></b> Proporciona nombres de bases de datos y archivos</li>
        <li> <b>.quit -></b> Salir del programa sqlite3</li>
        <li> <b>.tables -></b> Mostrar tablas actuales</li>
        <li> <b>.schema -></b> Pantalla de esquema de la tabla</li>
        <li> <b>.header -></b> Mostrar u ocultar el encabezado de la tabla de salida</li>
        <li> <b>.mode -></b> Selecciona el modo de la tabla de salida</li>
        <li> <b>.dump -></b> Base de datos de volcado en formato de texto SQL</li>
    </ol>

    <h1>Tipos de Datos en SQLite 3</h1>

    <p>SQLite 3 admite varios tipos de datos para almacenar diferentes tipos de información. Algunos de los
        tipos de datos comunes son:</p>

    <ul>
        <li><strong>INTEGER:</strong> Entero, puede ser con o sin signo y de varios tamaños (1, 2, 3, 4, 6 u
            8 bytes).</li>
        <li><strong>REAL:</strong> Número real, almacenado como punto flotante de 8 bytes.</li>
        <li><strong>TEXT:</strong> Cadena de texto, almacenada en codificación UTF-8 o UTF-16.</li>
        <li><strong>BLOB:</strong> Datos binarios, almacenados exactamente como fueron ingresados.</li>
        <li><strong>NUMERIC:</strong> Almacena datos en formato de texto si la cadena puede interpretarse
            como un número o una fecha.</li>
    </ul>

    <h1>Condiciones en SQLite 3</h1>

    <p>Las condiciones en SQLite 3 se utilizan en declaraciones SQL para filtrar y recuperar datos
        específicos. Algunas de las condiciones comunes son:</p>

    <ul>
        <li><strong>WHERE:</strong> Utilizado para especificar una condición para seleccionar filas.</li>
        <li><strong>AND:</strong> Utilizado para combinar múltiples condiciones en una declaración WHERE.
        </li>
        <li><strong>OR:</strong> Utilizado para combinar múltiples condiciones y recuperar filas si al menos
            una condición es verdadera.</li>
        <li><strong>NOT:</strong> Utilizado para negar una condición.</li>
        <li><strong>IN:</strong> Especifica un conjunto de valores para coincidir.</li>
        <li><strong>BETWEEN:</strong> Especifica un rango para coincidir.</li>
        <li><strong>LIKE:</strong> Utilizado para hacer coincidir un patrón en una columna.</li>
    </ul>
    <h1>Creación de Tablas en SQLite 3</h1>
    <p>Para crear una tabla en SQLite 3, se utiliza la sentencia SQL CREATE TABLE.</p>
    <h2>Ejemplo:</h2>
    <pre>
                    <code>
                        CREATE TABLE IF NOT EXISTS usuarios (
                            id INTEGER PRIMARY KEY AUTOINCREMENT,
                            nombre TEXT,
                            edad INTEGER
                        );
                    </code>
                    </pre>
    <p>
        En este ejemplo, estamos creando una tabla llamada "usuarios" con tres columnas:
    <ul>
        <li>"id" de tipo INTEGER, clave primaria, y autoincremental.</li>
        <li>"nombre" de tipo TEXT.</li>
        <li>"edad" de tipo INTEGER.</li>
    </ul>
    </p>

<h1>Claves Primarias en Bases de Datos</h1>
<p>Una clave primaria (primary key) en una base de datos es un campo o conjunto de campos que identifican de manera única cada fila en una tabla. La clave primaria garantiza que no haya filas duplicadas en la tabla y permite un acceso rápido y eficiente a los datos.</p>
<h2>Características de una Clave Primaria:</h2>
    <ul>
        <li><strong>Unicidad:</strong> Cada valor de la clave primaria debe ser único en la tabla.</li>
        <li><strong>NotNull:</strong> La clave primaria no puede tener valores nulos, es decir, debe contener un valor para cada fila.</li>
        <li><strong>Indexada:</strong> Normalmente, una clave primaria está indexada automáticamente para mejorar el rendimiento en las consultas.</li>
    </ul>

<h2>Uso de una Clave Primaria:</h2>
<p>Una clave primaria se utiliza para identificar de manera única cada fila en una tabla. Puede
consistir en uno o más campos (claves primarias compuestas) y se define cuando se crea la tabla mediante sentencias SQL.</p>

<h2>Ejemplo de Definición de Clave Primaria en SQL:</h2>
<p>En SQL, la definición de una clave primaria se realiza al crear la tabla. Aquí hay un ejemplo de cómo definir una clave primaria:</p>
    <pre>
        <code>
            CREATE TABLE Ejemplo (
                id INT PRIMARY KEY,
                nombre TEXT,
                edad INT
            );
        </code>
     </pre>
<p>En este ejemplo, "id" es el campo que actúa como clave primaria. La palabra clave "PRIMARY KEY" indica que este campo es la clave primaria de la tabla.</p>
</article>
');