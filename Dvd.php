<?php
    class Dvd extends Soporte{
        public $idioma;
        private $formatPantalla;

        public function __construct($number, $titulo, $precio, $idioma, $formatPantalla){
            parent::__construct($number, $titulo, $precio);
            $this->idioma = $idioma;
            $this->formatPantalla = $formatPantalla;
        }

        public function muestraResumen():void{
            
        }
    }

?>