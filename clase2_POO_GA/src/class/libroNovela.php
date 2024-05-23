<?php
include './libro.php';

class LibroNovela extends Libro 
{
    public $genero = "novela";
    public function __construct($titulo ,$autor ,$editorial ,$edicion ,$anio_public ,$n_hojas, $genero = "novela")
    {
        parent::__construct($titulo ,$autor ,$editorial ,$edicion ,$anio_public ,$n_hojas);
    $this->genero = $genero;

    }
    public function Informacion_Genero()
    {
    return "\n Esta es una novela del genero  {$this->genero}";
    }
}

$libro_fino = new LibroNovela("Mujercitas","Louisa May Alcott", "booket", "Molino", "Sexta",1869,198);
print_r($libro_fino);




