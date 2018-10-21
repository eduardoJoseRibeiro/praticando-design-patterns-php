<?php

require('./classes/Orcamento.php');
require('./classes/CalculadoraDeImposto.php');
require('./classes/Imposto.php');
require('./classes/ISS.php');
require('./classes/ICMS.php');

$orcamento = new Orcamento(500);
$calculadora = new CalculadoraDeImposto();

echo "Calcula ISS: ".$calculadora->calcula($orcamento, new ISS());
echo "<br/>";
echo "Calcula ICMS: ".$calculadora->calcula($orcamento, new ICMS());
