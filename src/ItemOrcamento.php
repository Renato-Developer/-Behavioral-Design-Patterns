<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\Orcavel;

class ItemOrcamento implements Orcavel
{
    public float $valor;

    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }

    public function valor()
    {
        return $this->valor;
    }
}