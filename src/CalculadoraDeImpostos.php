<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\Imposto;

Class CalculadoraDeImpostos 
{
    public function calculaImposto(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}