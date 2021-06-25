<?php

require_once "vendor/autoload.php";

$item1 = new \Alura\DesignPattern\ItemOrcamento(500);
$item2 = new \Alura\DesignPattern\ItemOrcamento(500);
$item3 = new \Alura\DesignPattern\ItemOrcamento(500);

$orcamento = new \Alura\DesignPattern\Orcamento();
$orcamento->aprova();


$orcamento->addItem($item1);
$orcamento->addItem($item2);

$orcamentoAntigo = new \Alura\DesignPattern\Orcamento();
$orcamentoAntigo->aprova();
$orcamentoAntigo->finaliza();
$orcamentoAntigo->addItem($item3);

$orcamento->addItem($orcamentoAntigo);

echo $orcamento->valor();
