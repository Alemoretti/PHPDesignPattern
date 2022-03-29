<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Http\HttpAdapter;

class RegistroOrcamento
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento): void
    {
        $this->http->post(
            'http://api.registrar.orcamento',
            [
                'valor' => $orcamento->valor,
                'quantidadeItens' => $orcamento->quantidadeItens
            ]
        );
    }
}