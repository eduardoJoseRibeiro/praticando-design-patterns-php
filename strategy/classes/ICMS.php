<?php 

// IMPOSTO DE 10%
class ICMS implements Imposto {
  public function calcula (Orcamento $Orcamento) {
    return $Orcamento->getValor() * 0.1;
  }
}