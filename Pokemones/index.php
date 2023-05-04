
<?php
require_once 'enum_tipo.php';
require_once 'Pokemon.php';
require_once 'Pokedex.php';

$pokemones = array(
    new Pokemon("Pokemon1", Tipo::Fuego, 1, 10, 60, ["Ataque1","Ataque2","Ataque3","Ataque4"]),
    new Pokemon("Pokemon2", Tipo::Agua, 2, 5, 55, ["Ataque1","Ataque10","Ataque3","Ataque4"]),
    new Pokemon("Pokemon3", Tipo::Electrico, 3, 4, 78, ["Ataque1","Ataque2","Ataque3","Ataque4"]),
    new Pokemon("Pokemon4", Tipo::Tierra, 4, 90, 170, ["Ataque1","Ataque2","Ataque3","Ataque4"]),
    new Pokemon("Pokemon5", Tipo::Agua, 5, 5, 45, ["Ataque1","Ataque2","Ataque3","Ataque4"]),
    new Pokemon("Pokemon6", Tipo::Fuego, 6, 105, 230, ["Ataque1","Ataque2","Ataque3","Ataque4"])
);

$pokedex = new Pokedex($pokemones);

$pokemonesFuego = $pokedex->getPokemonesFuego();

echo "Los pokemones Fuego son: <br>";
foreach ($pokemonesFuego as $pokemon) {
    echo $pokemon->getNombre() . "<br>";
}

$ataquesPokemon = $pokedex->mostrarAtaquesPokemon("Pokemon2");

    echo "Los ataques del Pokemon elegido son: <br>";
    foreach ($ataquesPokemon as $ataque) {
        echo $ataque . "<br>";
    }

?>