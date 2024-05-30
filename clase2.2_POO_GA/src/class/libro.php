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
    
    
    public function Set_Titulo(string $titulo_GA );
    public function Set_Autor(string $autor_GA );
    public function Set_Editorial(string $editorial_GA );
    public function Set_Edicion(string $edicion_GA):string;
    public function Set_Anio_Public(int $anio_public_GA):int;
    public function Set_N_Hojas(int $n_hojas_GA):int;
    
    
 
   
}


class Libro 
    {//* Atributos
        public $titulo_GA = "titulo por defecto";
        private $editorial_GA = "editorial por defecto";
        protected $autor_GA = "autor por defecto";
        protected $edicion_GA = "edicion por defecto";
        protected $anio_public_GA = 2023;
        protected $n_hojas_GA = 100;
//metodos
        public function __construct($titulo_GA ,$autor_GA ,$editorial_GA ,$edicion_GA ,$anio_public_GA ,$n_hojas_GA) {
            $this->titulo = $titulo_GA;
            $this->autor = $autor_GA;
            $this->editorial = $editorial_GA;
            $this->edicion = $edicion_GA;
            $this->anio_public = $anio_public_GA;
            $this->n_hojas = $n_hojas_GA;
        }
        public function Imprimir_Informacion()
        {
            echo "informacion del libro: \n";
            echo " ~~ titulo: {$this->titulo},\n ~~ Autor: {$this -> autor}\n";
        }
        public function  Get_Titulo():string{
            return $this-> titulo; 
            
        }
        public function  Set_Titulo(string $titulo_GA){
            $this->titulo = $titulo_GA; 
            return $this;
            
        }
        public function  Get_Autor():string{
            return $this-> autor; 
            
        }
        public function  Set_Autor(string $autor_GA){
            $this->autor = $autor_GA; 
            return $this;
            
        }
        public function  Get_Editorial():string{
            return $this-> editorial; 
            
        }
        public function  Set_Editorial(string $editorial_GA){
            $this->editorial = $editorial_GA; 
            return $this;
            
        }
        public function  Get_Edicion():string{
            return $this-> edicion; 
            
        }
        public function  Set_Edicion(string $edicion_GA){
            $this->edicion = $edicion_GA; 
            return $this;
            
        }
        public function  Get_Anio_Public():int{
            return $this-> anio_public; 
            
        }
        public function  Set_Anio_Public(int $anio_public_GA){
            $this->anio_public = $anio_public_GA; 
            return $this;
            
        }
        public function  Get_N_Hojas():int{
            return $this-> n_hojas; 
            
        }
        public function  Set_N_Hojas(int $n_hojas_GA){
            $this->n_hojas = $n_hojas_GA; 
            return $this;
            
        }


    }

    $libro_fantasia_GA = new Libro("EL HOBBIT", " J.R.R TOLKIEN", "booket", "doceava",1937,288);
    print_r($libro_fantasia_GA);
    print_r("\n Elemento Público \n");
    print_r($libro_fantasia_GA->titulo);
    print_r("\n Elemento Privado \n");
    print_r($libro_fantasia_GA->Get_Autor());
    print_r($libro_fantasia_GA->Get_Autor());
    
    print_r("Elemento Editar \n");
    print_r($libro_fantasia_GA->Set_Autor("Jonh Ronald Reuel Tolkien"));
    print_r($libro_fantasia_GA->Get_Autor());
    print_r($libro_fantasia_GA->Imprimir_Informacion());


    /* * $libro_Protec = new Libro_Protegido ('Título de la Novela', 'Autor de la Novela', 'Editorial XYZ', 'Segunda Edición', 2022, 400, 'novela');
    $libro2 = new Libro ('Titulo por defecto', "Autor por defecto", "editorial por defecto", "edición por defecto", 2023, 100);
    $libro_Protec ->Imprimir_Informacion();
    $libro2->Imprimir_Hoja();*/ 

    /*La abstracción en POO se refiere a mostrar solo la información esencial de un objeto y ocultar los detalles innecesarios. En este caso, podemos considerar la información básica del libro como la abstracción.*/
?>