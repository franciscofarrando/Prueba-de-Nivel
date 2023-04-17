<?php
require_once 'prueba_jugador.php';

class equipo extends jugador{
    private $jugadores;

    public function __construct($jugadores){
        $this->jugadores = $jugadores;
    }
    public function jugador_con_mas_goles(){
    $max_goles = 0;
    $jugador_max_goles = null;

    foreach ($this->jugadores as $jugador){
        if ($jugador->goles_hechos> $max_goles){
            $max_goles = $jugador->goles_hechos;
            $jugador_max_goles = $jugador;
        }

    }
    return $jugador_max_goles;
}
    public function jugador_con_mas_faltas_hechas (){
        $max_faltas = 0;
        $jugador_max_faltas = null;

        foreach ($this->jugadores as $jugador){
            if ($jugador->faltas_realizadas> $max_faltas){
                $max_faltas = $jugador->faltas_realizadas;
                $jugador_max_faltas = $jugador;
            }

        }
        return $jugador_max_faltas;
    }

}

$equipo = new Equipo ($jugadores);

$jugador_con_mas_goles = $equipo->jugador_con_mas_goles();

echo "El jugador con mas goles es: ".$jugador_con_mas_goles->nombre."<br>";

$jugador_con_mas_faltas_hechas = $equipo->jugador_con_mas_faltas_hechas();

echo "El jugador con mas faltas hechas es: ".$jugador_con_mas_faltas_hechas->nombre."\n";

?>