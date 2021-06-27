<?php

use Alura\DesignPattern\CacheOrcamentoProxy;
use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\Orcamento;

require_once "vendor/autoload.php";

$item1 = new ItemOrcamento(500);
$item2 = new ItemOrcamento(500);
$item3 = new ItemOrcamento(500);

$orcamento = new Orcamento();
$orcamento->aprova();


$orcamento->addItem($item1);
$orcamento->addItem($item2);

$orcamentoAntigo = new Orcamento();
$orcamentoAntigo->aprova();
$orcamentoAntigo->finaliza();
$orcamentoAntigo->addItem($item3);

$orcamento->addItem($orcamentoAntigo);

$proxyCache = new CacheOrcamentoProxy($orcamento);
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
