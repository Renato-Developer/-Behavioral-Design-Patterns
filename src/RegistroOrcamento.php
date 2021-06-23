<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Alura\DesignPattern\Http\HttpAdapter;

class RegistroOrcamento
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $httpAdapter)
    {
        $this->http = $httpAdapter;
    }

    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new \DomainException("Somente orçamentos finalizados podem ser registrados");
        }

        $this->http->post('http://api.registrar.orcamento', [
            "quantidadeDeItens" => $orcamento->quantidadeDeItens,
            "valor" => $orcamento->valor
        ]);
    }
}