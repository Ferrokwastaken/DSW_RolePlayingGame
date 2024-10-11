<?php
  namespace Dsw\Rpg;

  class Mago extends Personaje {
    public $mana;

    public function __construct($nombre, $nivel, $puntosDeVida, $mana)
    {
      parent::__construct($nombre, $nivel, $puntosDeVida);
      $this->mana = $mana;
    }

    public function atacar() {
      return $this->mana / 2;
    }

    public function defender($dañoInicial) {
      $dañoFinal = $dañoInicial - $this->mana / 5;
      return $dañoFinal > 0 ? $dañoFinal : 0;
    }
  }
?>