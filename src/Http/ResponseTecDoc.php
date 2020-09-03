<?php

namespace Gerfey\TecDoc\Http;

use Gerfey\TecDoc\Contracts\Http\ResponseTecDocInterface;
use Illuminate\Support\Collection;
use Psr\Http\Message\ResponseInterface;

class ResponseTecDoc implements ResponseTecDocInterface
{
    private $collect;

    private $response;

    public function __construct(ResponseInterface $response)
    {
        $this->collect = new Collection();

        $this->response = $response;
    }

    public function getJson(): object
    {
        return json_decode($this->response->getBody()->getContents());
    }

    public function getCollection(): Collection
    {
        return $this->collect->push($this->getJson()->data->array)->map(
            function ($positions) {
                return new Collection($positions);
            }
        )->first();
    }

    public function getStatusCode(): int
    {
        return $this->response->getStatusCode();
    }
}
