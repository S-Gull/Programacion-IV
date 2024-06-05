<?php 
$bd_nombre_GA = "usuarios.db";
$bd_GA = new SQLite3(__DIR__."./../database/{$bd_nombre_GA}");


if (!$bd_GA){
    echo "<script>
    Swal.fire({
        title: 'error',
        text: 'No existe la Base De Datos',
        icon: 'error'
      });
    </script>";
    die;

} else {
    echo "<script>
    Swal.fire({
        title: 'Correcto',
        text: 'Base de Datos Creada',
        icon: 'success'
    });
    </script>";
}
$query_GA = "CREATE TABLE IF NOT EXISTS tbl_usuarios( id INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
nombre TEXT,correo TEXT,clave TEXT)";
var_dump ($query_GA);
$bd_GA ->exec($query_GA);

?>