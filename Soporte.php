<?php
declare (strict_types= 1);
include_once("Resumible.php");

    abstract class Soporte implements Resumible{

        const IVA = 0.21;

        function __construct(
            public string $titulo, 
            protected int $numero,
            private float $precio){}


        public function getNumero(): int{
            return $this->numero;
        }

        public function getPrecio(): float{
            return $this->precio;
        }

        public function getPrecioConIVA(): float{
            return $this->getPrecio() + $this->getPrecio()*self::IVA;
        }

        public function muestraResumen(): void{
            echo "<br>";
            var_dump($this->titulo);
            echo "<br>";
            var_dump($this->numero);
            echo "<br>";
            var_dump($this->precio); 
        }
        
        
       //Si la clase abstracta implementa una interfaz, tienes que implementar o bien el metodo en la clase padre 
       //o en todos los hijos

       //Si la clase no es abstracta tiene que implentar el metodo la clase padre.  
    }
?>