<?php

require_once "vendor/autoload.php";

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icpp;
use Alura\DesignPattern\Impostos\Ikcv;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;


$orcamento = new Orcamento();
$orcamento->valor = 300;
$orcamento->quantidadeDeItens = 6;


$calculadoraDeImpostos = new CalculadoraDeImpostos();
echo $calculadoraDeImpostos->calculaImposto($orcamento, new Iss(new Icms())) . PHP_EOL;

/*
$calculadoraDeImpostos = new CalculadoraDeImpostos();
echo $calculadoraDeImpostos->calculaImposto($orcamento, new Icms()) . PHP_EOL;

$calculadoraDeImpostos = new CalculadoraDeImpostos();
echo $calculadoraDeImpostos->calculaImposto($orcamento, new Ikcv()) . PHP_EOL;

$calculadoraDeImpostos = new CalculadoraDeImpostos();
echo $calculadoraDeImpostos->calculaImposto($orcamento, new Icpp()) . PHP_EOL;

$calculadoraDeDescontos = new CalculadoraDeDescontos();
echo $calculadoraDeDescontos->CalculaDesconto($orcamento) . PHP_EOL;
*/