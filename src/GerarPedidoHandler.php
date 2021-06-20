<?php


namespace Alura\DesignPattern;


use DateTimeImmutable;

class GerarPedidoHandler
{
    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeDeItens = $gerarPedido->getNumeroDeItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        echo "Salvando pedido no banco de dados" . PHP_EOL;
        echo "Enviando E-Mail para o Cliente: {$gerarPedido->getNomeCliente()}" . PHP_EOL;
    }
}