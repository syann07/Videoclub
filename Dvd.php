<?php
include_once("Soporte.php");
    class Dvd extends Soporte{

        public $idioma;
        private $formatPantalla;

        public function __construct(
            string $titulo, 
            int $numero, 
            float $precio, 
            string $idioma, 
            string $formatPantalla){

            parent::__construct($titulo, $numero, $precio);
            $this->idioma = $idioma;
            $this->formatPantalla = $formatPantalla;
        }

        public function muestraResumen():void{
            parent::muestraResumen();
            echo "<br>";
            var_dump($this->idioma);
            echo "<br>";
            var_dump($this->formatPantalla);
        }
    }

?>