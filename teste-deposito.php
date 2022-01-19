<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente= new ContaCorrente(new Titular(new CPF('254.859.256-58'), 'Leticia Santos', new Endereco('Pelotas', 'Centro', 'XV', '631')));

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException){
    echo "Valor a depositar precisa ser positivo";
}