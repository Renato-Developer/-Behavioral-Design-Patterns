<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\ArquivoXMLExportado;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;

require_once "vendor/autoload.php";

$orcamento = new Orcamento();
$orcamento->valor = 1000;
$orcamento->quantidadeDeItens = 10;
$orcamento->aprova();
$orcamento->finaliza();

$orcamentoExportado = new OrcamentoExportado($orcamento);

$xml = new ArquivoXMLExportado('Teste');
echo $xml->salvar($orcamentoExportado);
