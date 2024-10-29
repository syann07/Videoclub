<?php
include_once("Soporte.php");
    class CintaVideo extends Soporte {
        public function __construct(
            string $titulo, 
            int $number,
            float $precio,
            private int $duracion,
        ){
            parent::__construct(
                $titulo, $number, $precio
            );
        }

        public function muestraResumen(): void {
            parent::muestraResumen();
            var_dump($this->duracion);
        }
    }
?>
