<?php

namespace Gerfey\TecDoc\Request;

use Gerfey\TecDoc\Contracts\Http\BaseClientInterface;
use Gerfey\TecDoc\Contracts\Http\ResponseTecDocInterface;

class Request
{
    private $client;

    public function __construct(BaseClientInterface $client)
    {
        $this->client = $client;
    }

    protected function createRequest(string $method = 'POST', array $options = []): ResponseTecDocInterface
    {
        return $this->client->createRequest($method, [$this->function => $options]);
    }
}
