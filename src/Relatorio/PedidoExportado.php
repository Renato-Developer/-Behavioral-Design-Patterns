<?php


namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Pedido;

class PedidoExportado implements ConteudoExportado
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        return [
            'Nome_cliente' => $this->pedido->nomeCliente,
            'Data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y')
        ];
    }
}