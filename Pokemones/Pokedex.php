<?php
class Pokedex {
    private $pokemones;

    public function __construct($pokemones){
        $this->pokemones = $pokemones;
    }

    public function getPokemonesFuego(){
        $pokemonesFuego = array();
        foreach($this->pokemones as $pokemon) {
            if ($pokemon->getTipo() == Tipo::Fuego){
                array_push($pokemonesFuego, $pokemon);
            }
        }
        return $pokemonesFuego;
    }
    public function mostrarAtaquesPokemon($nombrePokemon) {
        foreach ($this->pokemones as $pokemon) {
            if ($pokemon->getNombre() == $nombrePokemon) {
                return $pokemon->getAtaques();
            }
        }
        return null;
    }
}

?>