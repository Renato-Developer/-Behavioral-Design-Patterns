<?php

use Alura\DesignPattern\DadosExtrinsecosPedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

require_once "vendor/autoload.php";

$pedidos = [];

$nomeCliente = md5((string) rand(1, 100000));
$dataFinalizacao = new DateTimeImmutable();

$dados = new DadosExtrinsecosPedido($nomeCliente, $dataFinalizacao);


for ($i = 0; $i < 10000; $i++) {
    $pedido = new Pedido();
    $pedido->dadosExtrinsecosPedido = $dados;
    $pedido->orcamento = new Orcamento();

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();