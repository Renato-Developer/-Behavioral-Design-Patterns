<?php

require_once "vendor/autoload.php";

use Alura\DesignPattern\Http\ReactPHPHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroOrcamento;
use Alura\DesignPattern\Http\CurlHttpAdapter;

$orcamento = new Orcamento();
$orcamento->valor = 1000;
$orcamento->quantidadeDeItens = 10;
$orcamento->aprova();
$orcamento->finaliza();


$http = new ReactPHPHttpAdapter();

$registraOrcamento = new RegistroOrcamento($http);
$registraOrcamento->registrar($orcamento);