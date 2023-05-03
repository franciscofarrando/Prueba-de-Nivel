<?php
class jugador {
    public $nombre;
    protected $edad;
    private $posicion;
    protected $goles_hechos = 0;
    private $faltas_recibidas = 0;
    public $faltas_realizadas = 0;

   

    public function __construct($nombre = "", $edad = "", posicion $posicion , $goles_hechos ="", $faltas_recibidas = "", $faltas_realizadas = "" ){
     $this->nombre = $nombre;
     $this->edad = $edad;
     $this->posicion = $posicion;
     $this->goles_hechos = $goles_hechos;
     $this->faltas_recibidas = $faltas_recibidas;
     $this->faltas_realizadas = $faltas_realizadas;
     
    }

   
    public function setNombre ($nombre){
        $this->$nombre = $nombre;
    }
    public function getNombre ($nombre){
        $this->$nombre = $nombre;
    }
    public function setEdad ($edad){
        $this->$edad = $edad;
    }
    public function getEdad ($edad){
        $this->$edad = $edad;
        }
    public function setGolesHechos($goles_hechos){
        $this->goles_hechos = $goles_hechos;
    }
    public function getGolesHechos($goles_hechos){
        $this->goles_hechos = $goles_hechos;
    }

    public function setFaltasRealizadas($faltas_realizadas){
        $this->$faltas_realizadas = $faltas_realizadas;
    }
    public function getFaltasRealializadas ($faltas_realizadas){
        $this->$faltas_realizadas = $faltas_realizadas;
    }
     
}

enum posicion {
    case Arquero;
    case Defensor;
    case Centro;
    case Delantero;
}

$jugadores = array(
new Jugador ("juan", 23, posicion::Arquero,0, 3, 1),
new Jugador ("Pedro", 22, posicion::Defensor,0, 0, 1),
new Jugador ("Julian", 21, posicion::Centro,2, 1, 1),
new Jugador ("Sergio", 19, posicion::Delantero, 3, 1, 1),
new Jugador ("Matias", 24, posicion::Delantero, 2, 1, 2)
);

?>