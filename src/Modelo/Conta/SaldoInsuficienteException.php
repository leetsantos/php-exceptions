<?php

namespace Alura\Banco\Modelo\Conta;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem= "Você tentou sacar $valorSaque, mas tem apenar $saldoAtual". PHP_EOL;
        parent::__construct($mensagem);
    }
}