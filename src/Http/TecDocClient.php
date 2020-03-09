<?php

namespace Gerfey\TecDoc\Http;

use GuzzleHttp\ClientInterface;

class TecDocClient
{
    protected $client;

    /**
     * TecDocClient constructor.
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }
}