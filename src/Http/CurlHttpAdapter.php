<?php

namespace Alura\DesignPattern\Http;

class CurlHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $dados = []): void
    {
        //Instancio o CURL
        //Preparo os dados
        //Faço a requisiçao

        echo "Enviando dados para API";
    }
}