<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

Class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(NULL);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}