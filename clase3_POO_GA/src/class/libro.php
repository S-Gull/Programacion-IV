<?php
interface Libro_Interface {
   
    public function Imprimir_Informacion():string;
    
    //Metodos
    public function Get_Titulo():string;
    public function Get_Autor():string;
    public function Get_Editorial():string;
    public function Get_Edicion():string;
    public function Get_Anio_Public():int;
    public function Get_N_Hojas():int;
    
    
    public function Set_Titulo(string $titulo );
    public function Set_Autor(string $autor );
    public function Set_Editorial(string $editorial );
    public function Set_Edicion(string $edicion):string;
    public function Set_Anio_Public(int $anio_public):int;
    public function Set_N_Hojas(int $n_hojas):int;
    
    
 
   
}


class Libro 
    {//* Atributos
        public $titulo = "titulo por defecto";
        private $editorial = "editorial por defecto";
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
            echo " ~~ titulo: {$this->titulo},\n ~~ Autor: {$this -> autor}\n";
        }
        public function  Get_Titulo():string{
            return $this-> titulo; 
            
        }
        public function  Set_Titulo(string $titulo){
            $this->titulo = $titulo; 
            return $this;
            
        }
        public function  Get_Autor():string{
            return $this-> autor; 
            
        }
        public function  Set_Autor(string $autor){
            $this->autor = $autor; 
            return $this;
            
        }
        public function  Get_Editorial():string{
            return $this-> editorial; 
            
        }
        public function  Set_Editorial(string $editorial){
            $this->editorial = $editorial; 
            return $this;
            
        }
        public function  Get_Edicion():string{
            return $this-> edicion; 
            
        }
        public function  Set_Edicion(string $edicion){
            $this->edicion = $edicion; 
            return $this;
            
        }
        public function  Get_Anio_Public():int{
            return $this-> anio_public; 
            
        }
        public function  Set_Anio_Public(int $anio_public){
            $this->anio_public = $anio_public; 
            return $this;
            
        }
        public function  Get_N_Hojas():int{
            return $this-> n_hojas; 
            
        }
        public function  Set_N_Hojas(int $n_hojas){
            $this->n_hojas = $n_hojas; 
            return $this;
            
        }


    }

    $libro_fantasia = new Libro("EL HOBBIT", " J.R.R TOLKIEN", "booket", "doceava",1937,288);
    print_r($libro_fantasia);
    print_r("\n Elemento Público \n");
    print_r($libro_fantasia->titulo);
    print_r("\n Elemento Privado \n");
    print_r($libro_fantasia->Get_Autor());
    print_r($libro_fantasia->Get_Autor());
    
    print_r("Elemento Editar \n");
    print_r($libro_fantasia->Set_Autor("Jonh Ronald Reuel Tolkien"));
    print_r($libro_fantasia->Get_Autor());
    print_r($libro_fantasia->Imprimir_Informacion());


    /* * $libro_Protec = new Libro_Protegido ('Título de la Novela', 'Autor de la Novela', 'Editorial XYZ', 'Segunda Edición', 2022, 400, 'novela');
    $libro2 = new Libro ('Titulo por defecto', "Autor por defecto", "editorial por defecto", "edición por defecto", 2023, 100);
    $libro_Protec ->Imprimir_Informacion();
    $libro2->Imprimir_Hoja();*/ 

    /*La abstracción en POO se refiere a mostrar solo la información esencial de un objeto y ocultar los detalles innecesarios. En este caso, podemos considerar la información básica del libro como la abstracción.*/
?>