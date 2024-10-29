<?php
declare (strict_types = 1);
include_once("Cliente.php");
include_once("Juego.php");
include_once("Dvd.php");
include_once("CintaVideo.php");

 class Videoclub{

        public function __construct(
            private string $nombre,
            private array $productos = [],
            private int $numProductos = 0,
            private array $socios = [],
            private int $numSocios = 0,
        ){
            $this->nombre = $nombre;
            $this->productos = $productos;
            $this->numProductos = $numProductos;
            $this->socios = $socios;
            $this->numSocios = $numSocios;
        }

        private function incluirProducto(Soporte $s): void{
            $this->productos[$s->getNumero()] = $s;
            $this->numProductos++;
        }

        public function incluirSocio(string $nombre, int $numero, int $maxAlquileresConcurrentes = 3): void {
            $cliente = new Cliente($nombre, $numero, $maxAlquileresConcurrentes);
            $this->socios[$numero] = $cliente;
            $this->numSocios++;
        }

        public function incluirCintaVideo(string $titulo, int $numero, float $precio, int $duracion): void{
            $cintaVideo = new CintaVideo($titulo, $numero, $precio, $duracion);
            $this->incluirProducto($cintaVideo);
        }

        public function incluirDvd(string $titulo, int $numero, float $precio, string $idioma, string $pantalla): void{
            $dvd = new Dvd($titulo, $numero, $precio, $idioma, $pantalla);
            $this->incluirProducto($dvd);
        }

        public function incluirJuego(string $titulo, int $numero, float $precio, string $consola, int $minJ, int $maxJ): void{
            $juego = new Juego($titulo, $numero, $precio, $consola, $minJ, $maxJ);
            $this->incluirProducto($juego);
        }

        public function listarProductos():void{
            if(!empty($this->productos)){
                foreach($this->productos as $key => $producto){
                    echo $producto->muestraResumen() . "<br>";
                }
            }else echo "No existen productos.";
        }

        public function listarSocios():void{
            if(!empty($this->socios)){
                foreach($this->socios as $key => $socio){
                    echo $socio->muestraResumen() . "<br>";
                }
            }else echo "No existen socios.";
        }

        public function verificarClave($mapa, $num): bool {
            foreach($mapa as $key => $valor) {
                if ($key === $num) return true;
            }
            return false;
        }

        public function alquilaSocioProducto(int $numeroSocio, int $numeroSoporte) {
            // Ver si el soporte y el socio existe
            if (!$this->verificarClave($this->productos, $numeroSoporte)) {
                echo "No existe ese producto!";
            }
            else if (!$this->verificarClave($this->socios, $numeroSocio)) {
                echo "No existe ese socio!";
            }
            else {
                if ($this->socios[$numeroSocio]->alquilar($this->productos[$numeroSoporte])) {
                    $this->numProductos--;
                }                
            }

        }
}
?>