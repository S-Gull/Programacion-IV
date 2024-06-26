<?php
if (isset($_GET['submit'])){

if($_SERVER['REQUEST_METHOD'] =='GET'){

    include ("./src/class/libro.php");
    $titulo_GA = $_GET['titulo'];
    $autor_GA = $_GET['autor'];
    $editorial_GA = $_GET['editorial'];
    $edicion_GA = $_GET['edicion'];
    $anio_GA = $_GET['anio_publicacion'];
    $hojas_GA = $_GET['numero_hojas'];
    $libroSubmit_GA = new Libro( $titulo_GA,$autor_GA,$editorial_GA,$edicion_GA,$anio_GA,$hojas_GA);
}
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Clase 1</title>
</head>
<body>
    <?php
    $fecha = "8 Mayo 2024";
    $n_tema = 01;
    $tema = " POO - PHP ";
    include './src/includes/header.php';
    ?>
    <!--  -->

    <main>
        <section>
            <article>
            <h1> ¿Qué es la programación orientada a objetos?</h1>
                <p>
                    La programación orientada a objetos (POO) es un paradigma de programación que se basa en el uso de
                    objetos y clases para modelar conceptos y problemas del mundo real. En la POO, un objeto es una
                    entidad que contiene datos y métodos que actúan sobre dichos datos. Una clase es un molde o una
                    plantilla que define las propiedades y comportamientos de un objeto.
                </p>
            </article>
        </section>
        <section>
            
            <article>
  
                <!-- // imprimir el objeto -->
                <h1> Ejemplo de POO con PHP </h1>
                <div>
                <form action=" <?php echo (htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="GET">
                        <div>
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" minlength="2" pattern="[A-Za-z0-9._%+\-]{,3}" required>
                        </div>
                        <div><label for="autor">Autor</label>
                            <input type="text" name="autor" minlength="3" pattern="[A-Za-z.-]{,3}" required>
                        </div>
                        <div> <label for="editorial">Editorial</label>
                            <input type="text" name="editorial" minlength="4" pattern="[A-Za-z.-]{,3}" required>
                        </div>
                        <div> <label for="edicion">Edición</label>
                            <input type="text" name="edicion" minlength="4" pattern="[A-Za-z.-]{,3}" required>
                        </div>
                        <div> <label for="anio_publicacion">Año Publicación</label>
                            <input type="number" name="anio_publicacion" min="1900" max="2023" step="0000" pattern="[0-9]{,4}" required>
                        </div>
                        <div> <label for="numero_hojas">Numero Hojas</label>
                            <input type="number" name="numero_hojas" min="10" max="1600" step="0000" pattern="[0-9]{,4}" required>
                        </div>
                        <input type="submit" name='submit' value="Enviar">
                    </form>
                   <?php if (isset($_GET['submit'])){



    echo (' <h1> Detalles del libro Usando interface</h1>
                <ol>
                   <li> Titulo: '.$libroSubmit_GA ->Get_Titulo().'  </li>
                   <li> Autor: '.$libroSubmit_GA ->Get_Autor().'  </li>
                   <li> Editorial: '.$libroSubmit_GA ->Get_Editorial().' </li>
                   <li> Edición:    '.$libroSubmit_GA ->Get_Edicion().'</li>
                   <li> Año Publicación:  '.$libroSubmit_GA ->Get_Anio_Public().'</li>
                   <li> Numero Hojas: '.$libroSubmit_GA ->Get_N_Hojas().' </li>
               </ol>');
}


?>
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