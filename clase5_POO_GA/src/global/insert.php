<?php

 include ("./conexion.php");
$usuario_GA = $_POST['usuario'];
$correo_GA = $_POST['correo'];
$clave_GA = $_POST['clave'];
var_dump($usuario_GA ,$correo_GA ,$clave_GA);
$queryI_GA = "INSERT INTO tbl_usuarios(nombre,correo) VALUES ('$usuario_GA','$correo_GA')";

if ($bd_GA->exec($queryI_GA)){
    echo "<script>
    Swal.fire({
        title: 'Success!',
        text: 'Datos ingresados exitosamente',
        icon: 'success'
      });
    </script>";
    

} else {
    echo "<script>
    Swal.fire({
        title: 'Error',
        text: 'Error en el query o en la insercion de dato...',
        icon: 'error'
    });
    </script>";
}
?>