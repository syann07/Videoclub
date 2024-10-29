<?php
    class CintaVideo extends Soporte {
        public function __construct(
            private int $duracion,
            string $titulo, 
            int $number,
            float $precio
        ){
            parent::__construct(
                $titulo, $number, $precio
            );
        }

        public function mostrarResumen(): void {
            parent::mostrarResumen();
            var_dump($duracion);
        }
    }
?>
