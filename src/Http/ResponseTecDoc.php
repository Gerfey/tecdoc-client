<?php

namespace Gerfey\TecDoc\Http;

use Gerfey\TecDoc\Contracts\Http\ResponseTecDocInterface;
use Psr\Http\Message\ResponseInterface;

class ResponseTecDoc implements ResponseTecDocInterface
{
    private $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function getJson()
    {
        return json_decode($this->response->getBody()->getContents());
    }

    public function getStatusCode()
    {
        return $this->response->getStatusCode();
    }
}