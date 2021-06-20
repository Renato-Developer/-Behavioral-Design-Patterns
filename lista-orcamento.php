<?php

use Alura\DesignPattern\ListaOrcamentos;
use Alura\DesignPattern\Orcamento;

require_once "vendor/autoload.php";

$orcamento = new Orcamento();
$orcamento->quantidadeDeItens = 10;
$orcamento->aprova();
$orcamento->valor = 1000;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeDeItens = 10;
$orcamento2->reprova();
$orcamento2->valor = 2000;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeDeItens = 10;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 3000;

$listaOrcamento = new ListaOrcamentos();
$listaOrcamento->addOrcamento($orcamento);
$listaOrcamento->addOrcamento($orcamento2);
$listaOrcamento->addOrcamento($orcamento3);

foreach ($listaOrcamento->getIterator() as $item) {
    echo "VALOR: " . $item->valor . PHP_EOL;
    echo "Estado: " . get_class($item->estadoAtual) . PHP_EOL;
    echo "QTD Itens: " . $item->quantidadeDeItens . PHP_EOL;
}