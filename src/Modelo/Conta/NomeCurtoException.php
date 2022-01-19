<?php

namespace Alura\Banco\Modelo\Conta;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;


class NomeCurtoException extends \DomainException
{
    public function __construct($nome)
    {   $tam= strlen($nome);
        $message="O nome precisa ter no minimo 5 caracteres, o seu tem $tam". PHP_EOL;
        parent::__construct($message);
    }
}