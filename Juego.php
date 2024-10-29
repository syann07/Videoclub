<?php
include_once("Soporte.php");
class Juego extends Soporte{

    public function __construct(
        string $titulo, 
        int $numero, 
        float $precio, 

        //propiedades juego
        public string $consola, 
        private int $minNumJugadores = 1, 
        private int $maxNumJugadores = 1){

        parent::__construct($titulo,$numero, $precio);
        $this->consola = $consola;

        //comprobacion de jugadores
        if($this->maxNumJugadores >= $this->minNumJugadores && $this->minNumJugadores > 0 && $this->maxNumJugadores > 0) {
            $this->minNumJugadores = $minNumJugadores;
            $this->maxNumJugadores = $maxNumJugadores;
        }else{
            $this->minNumJugadores = 1;
            $this->maxNumJugadores = $maxNumJugadores > 1 ? $maxNumJugadores : 1;  
            //Si el minimo es 0 entra en el else y lo transforma a 1 y si el max es correcto lo deja como está, 
            //anoser que también sea 0 (que pasan ambos al valor por defecto 1)
        }
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
        
        //Para imprimir echo es por consola por lo que es preferible pasar las etiquetas html a un php aparte y acceder a laa
        //variables con ?=$nombre
    }
}

?>