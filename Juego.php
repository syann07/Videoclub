<?php
include_once("Soporte.php");
class Juego extends Soporte{

    public function __construct(
        string $titulo, 
        int $numero, 
        float $precio, 

        //propiedades juego
        public string $consola, 
        private int $minNumJugadores = 0, 
        private int $maxNumJugadores = 0){

        parent::__construct($titulo,$numero, $precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
        //falta comprobar que max >= que min
    }

    public function muestraJugadoresPosibles(): string{

        if($this->maxNumJugadores == 1){
            return "Para un jugador.";
        }
        elseif($this->minNumJugadores > 0 && $this->maxNumJugadores > 0){
            return "De ". $this->minNumJugadores." a ". $this->maxNumJugadores." jugadores.";
        }
        elseif( $this->minNumJugadores > 1){
            return "Para ". $this->minNumJugadores." jugadores.";
        }
       else{
            return "vete a la mierda.";
       }
    }

    public function muestraResumen(): void{
        parent::muestraResumen();
        echo "<br>";
        var_dump($this->consola);
        echo "<br>";
        var_dump($this->minNumJugadores);
        echo "<br>";
        var_dump($this->maxNumJugadores);
    }
}

?>