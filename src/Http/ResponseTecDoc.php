<?php

namespace Gerfey\TecDoc\Http;

use Gerfey\TecDoc\Contracts\Http\ResponseTecDocInterface;
use Psr\Http\Message\ResponseInterface;

class ResponseTecDoc implements ResponseTecDocInterface
{
    private ResponseInterface $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function getJson(): mixed
    {
        return json_decode($this->response->getBody()->getContents());
    }

    public function getStatusCode(): int
    {
        return $this->response->getStatusCode();
    }
}
