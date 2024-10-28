<?php
declare (strict_types= 1);

    class Soporte{

        const IVA = 0.21;

        function __construct(
            public string $titulo, 
            protected int $number,
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

        public function muestraResumen():void{

        }

       
    }
?>