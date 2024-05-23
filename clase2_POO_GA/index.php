<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Clase 2 ~ PHP-Sqlite</title>
</head>
<body>
    <?php
    $fecha = "15 Mayo 2024";
    $n_tema = 2;
    $tema = "Pilares de POO - PHP ||";
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
                <h1> Pilares de la Programación Orientada a Objetos</h1>
                <p>
                    La programación orientada a objetos como paradigma, se basa en cuatro pilares fundamentales:
                    abstracción, encapsulamiento, polimorfismo y herencia. Estos términos so la base de la POO y al
                    comienzo, puede ser un poco confuso entenderlo.
                </p>
                <ol>
                    <li><b>
                        Abstracción</b>
                    </li>
                    <p>
                        De este término ya unos párrafos más arriba. ¿Te acuerdas? cuando queríamos crear un usuario. El
                        proceso
                        de abstracción es pensar que atributos y qué métodos iba a tener.
                    </p>
                    <p>
                        Cuando creamos un sistema, tenemos que hacer una abstracción para todas las clases. Por ejemplo,
                        en
                        EDteam, serían los cursos, las clases, las suscripciones, las publicaciones en la comunidad.
                        Cada
                        uno de
                        estos elementos sería una clase, y tenemos que hacer ese proceso mental: qué atributos y qué
                        métodos
                        van
                        a tener cada uno. Esos conceptos hay que llevarlos y convertirlos en clases. </p>
                    </p>

                    <li><b>Encapsulamiento</b></li>
                    <p>
                    Como ya hemos visto, los objetos se comunican entre ellos. Esto podría traer problemas de seguridad
                    si
                    un objeto puede modificar los datos de cualquier otro. Por eso, se necesita proteger la información
                    de
                    manipulaciones no autorizadas. De esta manera, cuando se comunican los objetos, hay caminos que se
                    pueden seguir y hay caminos que no, datos protegidos, datos privados o públicos, métodos para
                    acceder a
                    cierta información, entre otros. Así se mantiene organizado el sistema.

                    Imagínate que cualquier objeto pueda acceder a cualquier información sin autorización, puede
                    ocasionar
                    cambios indebidos, que puede hacer que todo el sistema colapse y se caiga.
                    </p>
                    <li><b> Polimorfismo</b></li>
                    <p>
                    Volvamos a recordar el esquema del tío Alexys convirtiéndose en premium.

                    Cuando pasas a premium, se notifica vía tres canales en EDteam: slack, web y correo. La primera es
                    privada para nuestro equipo, mientras que las últimas dos, es visible para el usuario, confirmándole
                    que
                    ya es premium.

                    Si te das cuenta, es la misma funcionalidad (notificación), aunque internamente cada uno de esos
                    métodos
                    funciona diferente. Es decir, la notificación de Slack tiene su propia API, métodos y lógica, igual
                    para
                    la web y el correo. Pero en esencia, es la misma acción. Eso nos simplifica mucho el trabajo porque
                    podemos dar ordenes coherentes a varios objetos sin preocuparnos cómo se ejecutarán.

                    Por ejemplo, si le decimos al tía Alexys y a mí que bailemos, cada uno lo hará de forma diferente,
                    cada
                    uno a su modo. Sin embargo, nos dieron una orden y lo cumplimos, aunque a nuestra manera particular.
                    Eso
                    es el polimorfismo, poder darle la misma orden a diferentes objetos y que cada uno de ellos
                    respondan a
                    su propia manera.
                    </p>
                    <li><b>Herencia</b></li>
                    <p>
                    Este pilar de la POO es, quizás, el más fácil de entender porque tiene relación con el mundo real.
                    Por
                    ejemplo, mis hijos han heredado muchas cosas de mí, tanto atributos como funcionalidades. En
                    atributos,
                    podemos decir que el color de ojos, el cabello o el color de piel. En la funcionalidad, el carácter
                    o
                    personalidad. Sin embargo, ninguno es una copia exacta de mí. Sobre esas cosas que han heredado,
                    tienen
                    sus propios atributos y funcionalidad.

                    Es lo mismo que en la programación orientad a objetos. Tenemos una clase padre, y las clases hijas
                    heredan funcionalidades y atributos, pero no son idénticas. Solamente aprovechan eso que ya existen
                    y
                    luego se le añaden nuevas cosas.

                    Por ejemplo, si tenemos una clase para crear usuarios genéricos, pero luego necesitamos un usuario
                    diferente, de staff, solamente para el equipo de EDteam y que tenga diferentes funcionalidades y
                    atributos que un usuario normal ¿Qué podemos hacer? crear una nueva clase que herede de la clase
                    padre,
                    y esa sería el staff.

                    Si luego necesitamos otro usuario que sea profesor, entonces heredamos de la clase usuario y creamos
                    la
                    clase profesor, y de allí, creamos todos los usuarios de profesores del equipo. Ahora bien, si
                    queremos
                    meter invitados a la página, personas que sin pagar una suscripción puedan tener acceso a los
                    sorteos o
                    campañas, podemos crear un rol de invitados. Y así funciona la herencia en la POO.
                    </p>
                </ol>

                https://ed.team/blog/que-es-la-programacion-orientada-a-objetos-poo
            
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