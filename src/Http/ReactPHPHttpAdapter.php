<?php


namespace Alura\DesignPattern\Http;


class ReactPHPHttpAdapter implements HttpAdapter
{

    public function post(string $url, array $dados = []): void
    {
        //Instancio o ReactPHP
        //Preparo os dados
        //Faço a requisiçao

        echo "Enviando dados para API";
    }
}