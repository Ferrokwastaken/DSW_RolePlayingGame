<?php
  namespace Dsw\Rpg;

  abstract class Personaje {
    public $nombre;
    public $nivel;
    public $puntosDeVida;

    public function __construct($nombre, $nivel, $puntosDeVida)
    {
      $this->nombre = $nombre;
      $this->nivel = $nivel;
      $this->puntosDeVida = $puntosDeVida;
    }

    abstract public function atacar();
    abstract public function defender($dañoInicial);

    public function subirNivel() {
      $this->nivel++;
    }

    static public function lucha($personaje1, $personaje2) {
      $personaje2->puntosDeVida -= $personaje2->defender($personaje1->atacar());
      $personaje1->puntosDeVida -= $personaje1->defender($personaje2->atacar());
    }
  }
?>