<?php
/*

Exemplo de Utilização do pacote

Execute o comando no console: $ php -S localhost:5000

Visualizar o exemplo de utilização através da url: http://localhost:5000/run.php

*/
require 'vendor/autoload.php';

use AppFelipeFariasCalculadora\Calculadora;

$calculadora = new Calculadora();
$totalSoma = $calculadora->somar(10,10);

echo "Resultado { valor 1 + valor 2 } = ".$totalSoma."<br />";


$totalSubtrair = $calculadora->subtrair(30,10);

echo "Resultado { valor 1 - valor 2 } = ".$totalSubtrair."<br />";

?>