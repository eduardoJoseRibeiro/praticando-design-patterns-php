<?php 

class Orcamento {
  private $valor = 0;

  function __construct ($valor) {
    $this->valor = $valor;
  }

  public function getValor () {
    return $this->valor;
  }
}