<?php
  namespace Dsw\Rpg;

  class Guerrero extends Personaje {
    public $fuerza;

    public function __construct($nombre, $nivel, $puntosDeVida, $fuerza)
    {
      parent::__construct($nombre, $nivel, $puntosDeVida);
      $this->fuerza = $fuerza;
    }

    public function atacar() {
      return $this->nivel * $this->fuerza;
    }

    public function defender($dañoInicial) {
      $dañoFinal = $dañoInicial - $this->fuerza / 2;
      return $dañoFinal > 0 ? $dañoFinal : 0;
    }
  }
?>