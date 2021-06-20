<?php


namespace Alura\DesignPattern;


use ArrayIterator;
use Exception;
use Traversable;

class ListaOrcamentos implements \IteratorAggregate
{
    /** @var Orcamento */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento): void
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->orcamentos);
    }
}