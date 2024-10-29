<?php
declare (strict_types = 1);
include_once("Soporte.php");
include_once("Cliente.php");

 class Videoclub{

        public function __construct(
            private string $nombre,
            private array $productos,
            private int $numProductos = 0,
            private array $socios,
            private int $numSocios = 0,
        ){
            $this->nombre = $nombre;
            $this->productos = [];
            $this->numProductos = $numProductos;
            $this->socios = [];
            $this->numSocios = $numSocios;
        }

        private function incluirProducto(Soporte $s): void{
            $this->productos[] = $s;
        }

        // private function incluirSocio(Cliente $c): void{
        //     $this->socios[] = $c;
        // }

        public function incluirSocio(string $nombre, int $maxAlquileresConcurrentes = 3){
            $cliente = new Cliente($nombre, $maxAlquileresConcurrentes);
            $this->incluirSocio($cliente);
        }

        public function incluirCintaVideo(string $titulo, float $precio, int $duracion): void{
            $cintaVideo = new CintaVideo($titulo, $precio, $duracion);
            $this->incluirProducto($cintaVideo);
        }

        public function incluirDvd(string $titulo, float $precio, string $idioma, string $pantalla): void{
            $dvd = new Dvd($titulo, $precio, $idioma, $pantalla);
            $this->incluirProducto($dvd);
        }

        public function incluirJuego(string $titulo, float $precio, string $consola, int $minJ, int $maxJ): void{
            $juego = new Dvd($titulo, $precio, $consola, $minJ, $maxJ);
            $this->incluirProducto($juego);
        }

        public function listarProductos():void{
            if(!empty($this->productos)){
                foreach($this->productos as $producto){
                    echo $producto->muestraResumen() . "<br>";
                }
            }else{echo "No existen productos.";}
        }

        public function listarSocios():void{
            if(!empty($this->socios)){
                foreach($this->socios as $socio){
                    echo $socio->muestraResumen() . "<br>";
                }
            }else{echo "No existen socios.";}
        }

        public function alquilarSocioProducto(int $numeroCliente, int $numeroSoporte){

        }
}
?>