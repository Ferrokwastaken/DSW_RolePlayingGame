<?php
  namespace Dsw\Rpg;

  class Partida {
    private $personajes;

    function __construct()
    {
      $this->personajes = [];
    }
    
    function agregarPersonaje(Personaje $personaje) {
      $this->personajes [] = $personaje;
    }

    function obtenerPersonajes() : array {
      return $this->personajes;
    }

    function eliminarPersonaje(Personaje $personaje) {
      $result = array_search($personaje, $this->personajes);

      if ($result === false) {
        echo "No se encuentra en el array de personajes";
      } else {
        array_splice($this->personajes, $result, 1);
      }
    }

    function obtenerPersonajesPorClase($class) : array {
      return array_filter($this->personajes, function ($personaje) use ($class) {
        return $personaje instanceof $class;
      });
    }

    public function eliminarMuertos() : void {
      $this->personajes = array_filter($this->personajes, function($p) {
        return $p->puntosDeVida > 0;
      });
    }
  }
?>