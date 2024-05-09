<?php

echo  (' 
<footer>
<table>
<tr><td><img src="./src/img/'. $logo .'" alt="Logo" style="width: 50px; height: 50px; " />
    </td><td><p>
        <span>Profesor:  <strong> Ronald Palacios </strong>   Curso: <u> Programación Orientado a Objeto  PHP-Sqlite  </u> &copy ' . date('Y') . '</span> 
    </p></td></tr>
    <tr>
    <td>
    <img src="./src/img/'.$logo1.'" alt="Logo" style="width: 50px; height: 50px; " />
    </tr>

<!-- Parte Del Alumno-->
    <tr>
    </td><td><p> Universidad:'.$universidad.'
    </p></td>
    <td><p>
        <span>Alumno:  <strong>' .$alumno. '</strong>   C.I: <u>'. $cedula . '</span> 
    </p></td></tr>
    
</table>
</footer>
');;