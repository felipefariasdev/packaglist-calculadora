Simples exemplo de calculadora criando um packaglist com phpunit {PSR-4} 

$ git clone https://github.com/felipefariasdev/packaglist-calculadora.git

$ cd packaglist-calculadora

$ composer install

$ vendor/bin/phpunit

https://packagist.org/packages/felipefariasdev/packaglist-calculadora

Para adicionar a dependencia ao seu projeto utilize o comando:

$ composer require felipefariasdev/packaglist-calculadora:dev-master

Criar o arquivo run.php com o seguinte código:

<?php

require 'vendor/autoload.php';

use AppFelipeFariasCalculadora\Calculadora;

$calculadora = new Calculadora();
$totalSoma = $calculadora->somar(10,10);

echo "Resultado { valor 1 + valor 2 } = ".$totalSoma."<br />";


$totalSubtrair = $calculadora->subtrair(30,10);

echo "Resultado { valor 1 - valor 2 } = ".$totalSubtrair."<br />";

?>