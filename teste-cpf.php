<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\NomeCurtoException;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

try{
    $contaCorrente= new ContaCorrente(new Titular(new CPF('254.802.425-38'), 'Leticia', new Endereco('Pelotas', 'Centro', 'XV', '631')));
}catch (InvalidArgumentException | NomeCurtoException $erro){
    echo $erro->getMessage() .PHP_EOL;
}

