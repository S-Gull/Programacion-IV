<?php
include './libro.php';

class LibroNovela extends Libro 
{
    public $genero_GA = "novela";
    public function __construct($titulo_GA ,$autor_GA ,$editorial_GA ,$edicion_GA ,$anio_public_GA ,$n_hojas_GA, $genero_GA = "novela")
    {
        parent::__construct($titulo_GA ,$autor_GA ,$editorial_GA ,$edicion_GA ,$anio_public_GA ,$n_hojas_GA);
    $this->genero = $genero_GA;

    }
    public function Informacion_Genero()
    {
    return "\n Esta es una novela del genero  {$this->genero}";
    }
}

$libro_fino_GA = new LibroNovela("Mujercitas","Louisa May Alcott", "booket", "Molino", "Sexta",1869,198);
print_r($libro_fino_GA);




