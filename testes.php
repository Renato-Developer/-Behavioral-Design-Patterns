<?php

require_once "vendor/autoload.php";

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;


$orcamento = new Orcamento();
$orcamento->valor = 1000;
$orcamento->quantidadeDeItens = 6;

/*
$calculadoraDeImpostos = new CalculadoraDeImpostos();
echo $calculadoraDeImpostos->calculaImposto($orcamento, new Icms());
*/

$calculadoraDeDescontos = new CalculadoraDeDescontos();
echo $calculadoraDeDescontos->CalculaDesconto($orcamento);
