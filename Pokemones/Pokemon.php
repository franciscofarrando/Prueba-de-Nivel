<?php
require_once 'enum_tipo.php';


class Pokemon {
    protected $nombre;
    protected $tipo;
    protected $id;
    protected $peso;
    protected $altura;
    protected $ataques;

    public function __construct($nombre, Tipo $tipo, $id, $peso, $altura, $ataques){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->id = $id;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->ataques = $ataques;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getId(){
        return $this->id;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getAtaques(){
        return $this->ataques;
    }
}

?>