<?php
class Libro {
    public $titulo;
    public $autor;
    public $editorial;
    public $edicion;
    public $anio_public;
    public $n_hojas;
    
    //Metodos
    public function __construct()
    {
        $this-> titulo = "titulo por defecto";
        $this-> autor = "autor por defecto";
        $this-> editorial = "editorial por defecto";
        $this-> edicion = "edicion por defecto";
        $this-> anio_public = 2023;
        $this-> n_hojas = 100;
    

    }
    public function Imprimir_Hoja()
    {
        echo "informacion del nro de hojas: {$this->n_hojas}";
        
    }
}
$libro1 = new Libro();
var_dump($libro1);

class Libro_Protegido 
    {//* Atributos
        protected $titulo = "titulo por defecto";
        protected $editorial = "editorial por defecto";
        protected $autor = "autor por defecto";
        protected $edicion = "edicion por defecto";
        protected $anio_public = 2023;
        protected $n_hojas = 100;
//metodos
        public function __construct($titulo ,$autor ,$editorial ,$edicion ,$anio_public ,$n_hojas) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->editorial = $editorial;
            $this->edicion = $edicion;
            $this->anio_public = $anio_public;
            $this->n_hojas = $n_hojas;
        }
        public function Imprimir_Informacion()
        {
            echo "informacion del libro: \n";
            echo "titulo: {$this->titulo}, Autor: {$this -> autor}\n";
        }

    }
    $libro_Protec = new Libro_Protegido ('Título de la Novela', 'Autor de la Novela', 'Editorial XYZ', 'Segunda Edición', 2022, 400, 'novela');
    $libro2 = new Libro ('Titulo por defecto', "Autor por defecto", "editorial por defecto", "edición por defecto", 2023, 100);
    $libro_Protec ->Imprimir_Informacion();
    $libro2->Imprimir_Hoja();

?>

