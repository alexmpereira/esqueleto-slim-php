<?php

namespace Unialfa\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ClienteController
{
    public function getClientes(Request $request, Response $response, $args)
    {
        $clientes = [
            ['id' => 1, 'nome' => 'Cliente 1'],
            ['id' => 2, 'nome' => 'Cliente 2'],
            ['id' => 3, 'nome' => 'Cliente 3']
        ];

        $response->getBody()->write(json_encode($clientes));
        return $response
            ->withHeader('Content-Type', 'application/json');
    }
}