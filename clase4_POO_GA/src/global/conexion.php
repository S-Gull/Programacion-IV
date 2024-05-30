<?php
$db_GA = (__DIR__.'./../database/database.db');
$conexion_GA = new SQLite3($db_GA);
if (!$db_GA) die ("error en la db");
$query_GA = " CREATE TABLE IF NOT EXISTS tbl_datos_GA (id INTEGER PRIMARY KEY AUTOINCREMENT 
UNIQUE, NOMBRE TEXT, EDAD INTEGER)";
$conexion_GA->exec($query_GA);
print_r('tabla creada exitosamente');
echo'base de datos creada exitosamente';
$conexion_GA->close();

?>