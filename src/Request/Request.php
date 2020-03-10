<?php

namespace Gerfey\TecDoc\Request;

use Gerfey\TecDoc\Contracts\Http\BaseClientInterface;
use Gerfey\TecDoc\Contracts\Http\ResponseTecDocInterface;

class Request
{
    /**
     * @var BaseClientInterface
     */
    private $client;

    /**
     * Request constructor.
     * @param BaseClientInterface $client
     */
    public function __construct(BaseClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $method
     * @param array $options
     * @return mixed
     */
    protected function createRequest(string $method = 'POST', array $options = []): ResponseTecDocInterface
    {
        return $this->client->createRequest($method, [$this->function => $options]);
    }
}