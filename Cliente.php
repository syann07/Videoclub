<?php

declare(strict_types = 1);
include_once("Soporte.php");
class Cliente {
    private int $numSoportesAlquilados = 0;
    private array $soportesAlquilados = [];

    public function __construct(
        public string $nombre,
        private int $numero,
        private int $maxAlquilerConcurrente = 3
    ){}

    // Getters y Setters
    public function getNumero(): int {
        return $this->numero;
    }
    public function setNumero(int $numero): void {
        $this->numero = $numero;
    }
    public function getNumSoportesAlquilados(): int {
        return $this->numSoportesAlquilados;
    }
    
    // toString
    public function muestraResumen(): void {
        var_dump($this->nombre);
        echo "<br>" . count($this->soportesAlquilados);
    }

    // Demás funciones
    public function tieneAlquilado(Soporte $s): bool {
        foreach ($this->soportesAlquilados as $key => $soporte) {
            if ($s === $soporte) return true;
        }
        return false;
    }

    public function alquilar(Soporte $s): bool  {
        if ($this->tieneAlquilado($s)) {
            echo "<br> ¡Soporte ya alquilado!";
            return false;
        }
        else if (count($this->soportesAlquilados) >= $this->maxAlquilerConcurrente) {
            echo "<br> ¡Máximo de soportes alquilados superado!";
            return false;
        }

        $this->soportesAlquilados[$s->getNumero()] = $s;
        //$this->soportesAlquilados[] = $s;
        $this->numSoportesAlquilados++;
        return true;
    }

    public function devolver(int $numSoporte): bool {
       
        foreach($this->soportesAlquilados as $key => $soporte) {

            if ($soporte->getNumero() == $numSoporte) {
                unset($this->soportesAlquilados[$numSoporte]);
                //array_splice($this->soportesAlquilados, $i, 0);
                $this->numSoportesAlquilados--;
                echo "<br> Se ha devuelto correctamente!";
                return true;
            }
        }
        echo "<br> No se encontró el soporte!";
        return false;

    }

    public function listarAlquileres(): void {
        echo "<br>Número de alquileres: " . count($this->soportesAlquilados);
        foreach ($this->soportesAlquilados as $key => $soporte) {
            echo "<br>" . $soporte->muestraResumen();
        }
    }

    
}

?>